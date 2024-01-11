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
                <h3 class="card-title">Tambah Konsultasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahkonsul.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Pelanggan" name="nama_pelanggan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Konsultasi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tanggal Konsultasi" name="tgl_konsultasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keluhan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Keluhan" name="keluhan">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Resep Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Resep Dokter" name="resep_apotek">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Catatan Konsultasi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Catatan Konsultasi" name="c_konsul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rating Konsultasi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Rating Konsultasi" name="rat_konsul">
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