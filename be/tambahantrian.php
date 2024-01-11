
<?php include('layouts2/header.php') ?>
<?php include('layouts2/topbar.php') ?>
<?php include('layouts2/sidemenu.php') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Antrian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahcust.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Customer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ID Customer" name="id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Customer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama Customer" name="nama_cust">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Customer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Alama6" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Handphone Customer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter No Handphone" name="nohp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Customer</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Status" name="status">
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
  <?php include('layouts2/footer.php') ?>