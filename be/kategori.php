<?php include('layouts/header.php') ?>
<?php include('layouts/topbar.php') ?>
<?php include('layouts/sidemenu.php') ?>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="tambahkategori.php"><button>Tambah kategori</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori Obat</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <th>Icons</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "koneksidatabase.php";
                    $query = "SELECT * FROM tb_kategori";
                    $eksekusi = mysqli_query($db, $query);
                    $no = 1; // 
                    while ($data = mysqli_fetch_array($eksekusi)) {

                      $id = $data['id']; 
                      $nama_k = $data['nama_k'];
                      $deskripsi = $data['deskripsi'];
                      $gambar = $data['gambar'];
                      $icons = $data['icon']; // 
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $nama_k ?></td>
                        <td><?php echo $deskripsi ?></td>
                        <td>
                          <img src="<?php echo $gambar ?>" alt="Gambar Kategori" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>
                          <img src="<?php echo $icons ?>" alt="Gambar Icons" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>
                          <a href="editkategori.php?id=<?php echo $id ?>"><button class="btn btn-primary">Edit</button></a>
                          <a href="deletekate.php?id=<?php echo $id ?>"><button class="btn btn-success">Hapus</button></a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Kategori Obat</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <th>Icons</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('layouts/footer.php') ?>
