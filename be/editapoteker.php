<?php include('layouts/header.php') ?>
<?php include('layouts/topbar.php') ?>
<?php include('layouts/sidemenu.php') ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Apoteker</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditapoteker.php" method="POST"enctype="multipart/form-data"> 
                <div class="card-body">
                  <?php
                  include "koneksidatabase.php";
                  $id = $_GET['id'];

                  $query = "SELECT * FROM apoteker WHERE id=$id";
                  $eksekusi = mysqli_query($db, $query);
                  $data = mysqli_fetch_array($eksekusi);
                  $id = $data[0];
                  $nama = $data[1];
                  $jabatan = $data[2];
                  $gambar = $data[3];
                  ?>

                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                  </div>

                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <textarea class="form-control" id="jabatan" name="jabatan"><?php echo $jabatan ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="gambar">Gambar </label>
                    <br>
                    <img src="<?php echo $gambar ?>" alt="" style="max-width: 300px; max-height: 200px;">
                    <br>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('layouts/footer.php') ?>
