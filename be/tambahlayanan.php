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
                <h3 class="card-title">Tambah Layanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahlayanan.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Layanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama " name="nama_layanan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi Layanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Deskripsi" name="deskripsi_layanan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Layanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Biaya" name="biaya_layanan">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Waktu Layanan </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Waktu" name="waktu_layanan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Layanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tanggal" name="tgl_layanan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status Layanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Status" name="status_layanan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rating Layanan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Rating " name="rating_layanan">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          <!--/.col (left) -->
          <!-- right column -->
        
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('layouts/footer.php') ?>