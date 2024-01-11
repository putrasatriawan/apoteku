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
                <h3 class="card-title"><a href="tambahkontak.php"><button>Tambah kontak</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>No Hp</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Pesan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "koneksidatabase.php";
                    $query = "SELECT * FROM kontak_tb";
                    $eksekusi = mysqli_query($db, $query);
                    while ($data = mysqli_fetch_array($eksekusi)) {

                      $id = $data[0];
                      $name = $data[1];
                      $phone = $data[2];
                      $gender = $data[3];
                      $email = $data[4];
                      $message = $data[5];
                   
                    ?>
                      <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name?></td>
                        <td><?php echo $phone ?></td>
                        <td><?php echo $gender ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $message ?></td>
                        <td>
                          <a href="editkontak.php?id=<?php echo $id ?>"><button class="btn btn-primary">Edit</button></a>
                          <a href="deletekontak.php?id=<?php echo $id ?>"><button class="btn btn-success">Hapus</button></a>
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
                      <th>No Hp</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Pesan</th>
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
