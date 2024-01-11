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
                <h3 class="card-title">Edit Resep</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditresep.php" method="POST"> 
                <div class="card-body">
                <?php
                        include "koneksidatabase.php";
                        $id=$_GET['id'];

                        $query = "SELECT * FROM tbl_pasien where id=$id";
                        $eksekusi = mysqli_query($db, $query);
                        $data = mysqli_fetch_array($eksekusi);
                        $id = $data[0];
                            $nama = $data[1];
                            $no_hp = $data[2];
                            $resep = $data[3];
                            $dokter= $data[4];
                       
                        ?>
                       

                           


                  <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Obat" name="id" value="<?php echo $id?>">

                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama " name="nama" value="<?php echo      
                     $nama?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NO HP </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Umur" name="no_hp" value="<?php echo 
                    $no_hp?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Resep</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Obat" name="resep" value="<?php echo $resep?>">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bentuk Penyakit " name="dokter" value="<?php echo      
                     $dokter?>">
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