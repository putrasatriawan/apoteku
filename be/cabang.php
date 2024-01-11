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
              <h3 class="card-title"><a href="tambahcabang.php"><button>Tambah Cabang</button></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Deskripsi</th>
                    <th>No Hp</th>
                    <th>Pelayanan</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "koneksidatabase.php";
                  $query = "SELECT * FROM cabang_tb";
                  $eksekusi = mysqli_query($db, $query);
                  $no = 1; // 
                  while ($data = mysqli_fetch_array($eksekusi)) {

                    $id = $data['id'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];
                    $deskripsi = $data['deskripsi'];
                    $no_hp = $data['no_hp'];
                    $pelayanan = $data['pelayanan'];
                    $gambar = $data['gambar'];

                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $nama ?></td>
                      <td><?php echo $alamat ?></td>
                      <td><?php echo $deskripsi ?></td>
                      <td><?php echo $no_hp ?></td>
                      <td><?php echo $pelayanan ?></td>
                      <td>
                        <img src="<?php echo $gambar ?>" alt="Gambar Cabang" style="max-width: 100px; max-height: 100px;">
                      </td>
                      <td>
                        <a href="editcabang.php?id=<?php echo $id ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="deletecabang.php?id=<?php echo $id ?>"><button class="btn btn-success">Hapus</button></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Deskripsi</th>
                    <th>No Hp</th>
                    <th>Pelayanan</th>
                    <th>Gambar</th>
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