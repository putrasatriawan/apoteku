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
              <h3 class="card-title"><a href="tambahcustomer.php"><button>Tambah Customer</button></a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Customer</th>
                    <th>Nama Customer</th>
                    <th>Alamat</th>
                    <th>No handphone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "koneksidatabase.php";
                  $query = "SELECT * FROM tb_customer";
                  $eksekusi = mysqli_query($db, $query);
                  while ($data = mysqli_fetch_array($eksekusi)) {
                    $id = $data[0];
                    $idcust = $data[1];
                    $namacust = $data[2];
                    $alamat = $data[3];

                    $nope = $data[4];
                    $imel = $data[5];
                    $status = $data[6];
                  ?>
                    <tr>
                      <td><?php echo $id ?></td>
                      <td><?php echo $idcust ?></td>
                      <td><?php echo $namacust ?></td>
                      <td><?php echo $alamat ?></td>

                      <td><?php echo $nope ?></td>
                      <td><?php echo $imel ?></td>
                      <td><?php echo $status ?></td>
                      <td>
                        <a href="editcustomer.php?id=<?php echo $id ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="deletecustomer.php?id=<?php echo $id ?>"><button class="btn btn-success">Hapus</button></a>
                      </td>

                    </tr>

                  <?php
                  }
                  ?>


                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID Customer</th>
                    <th>Nama Customer</th>
                    <th>Alamat</th>
                    <th>No handphone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
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