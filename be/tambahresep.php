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
                <h3 class="card-title">Tambah Resep</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahresep.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama " name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="no_hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Resep </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Obat" name="resep">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="dokter">
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