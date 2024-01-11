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
                <h3 class="card-title">Tambah Kontak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahkontak.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama " name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No Hp" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Gender" name="gender">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pesan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No Pesan" name="message">
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