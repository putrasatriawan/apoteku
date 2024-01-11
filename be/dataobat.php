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
              <h3 class="card-title"><a href="tambahobat.php"><button>Tambah Obat</button></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Obat </th>
                    <th>Nama Obat</th>
                    <th>Kategori Obat</th>
                    <th>Bentuk Obat</th>
                    <th>Kandungan Obat</th>
                    <th>Harga Obat </th>
                    <th>Stok Obat</th>
                    <th>Tanggal Kadaluarsa</th>

                    <th>Gambar</th>

                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "koneksidatabase.php";
                  $query = "SELECT tb_obat.id, tb_obat.kode_obat, tb_obat.nama, tb_kategori.nama_k, tb_obat.bentuk_obat, tb_obat.kandungan_obat, tb_obat.harga_obat, tb_obat.stok_obat, tb_obat.tgl_kdl, tb_obat.gambar
                        FROM tb_obat
                        JOIN tb_kategori ON tb_obat.kategory_obat = tb_kategori.id;
                         ";
                  $eksekusi = mysqli_query($db, $query);
                  while ($data = mysqli_fetch_array($eksekusi)) {
                    // var_dump($gambar);

                    $id = $data[0];
                    $kode_obat = $data[1];
                    $nama = $data[2];
                    $kategory_obat = $data[3];
                    $bentuk_obat = $data[4];
                    $kandungan_obat = $data[5];
                    $harga_obat = $data[6];
                    $stok_obat = $data[7];
                    $tgl_kdl = $data[8];
                    $gambar = $data['gambar'];

                  ?>


                    <tr>
                      <td><?php echo $id ?></td>
                      <td><?php echo $kode_obat ?></td>
                      <td><?php echo $nama ?></td>
                      <td><?php echo $kategory_obat ?></td>
                      <td><?php echo $bentuk_obat ?></td>
                      <td><?php echo $kandungan_obat ?></td>
                      <td><?php echo $harga_obat ?></td>
                      <td><?php echo $stok_obat ?></td>
                      <td><?php echo $tgl_kdl ?></td>
                      <td>
                        <img src="uploads/<?php echo $gambar ?>" alt="Gambar " style="max-width: 100px; max-height: 100px;">
                      </td>
                      <td>
                        <a href="editobat.php?id=<?php echo $id ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="deleteobat.php?id=<?php echo $id ?>"><button class="btn btn-success">Hapus</button></a>
                      </td>

                    </tr>

                  <?php
                  }
                  ?>


                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Obat </th>
                    <th>Nama Obat</th>
                    <th>Kategori Obat</th>
                    <th>Bentuk Obat</th>
                    <th>Kandungan Obat</th>
                    <th>Harga Obat </th>
                    <th>Stok Obat</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Gambar
                    </th>


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

<?php include('layouts/footer.php') ?>