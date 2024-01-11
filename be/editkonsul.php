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
                <h3 class="card-title">Edit Konsultasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditkonsul.php" method="POST"> 
                <div class="card-body">
                <?php
                        include "koneksidatabase.php";
                        $id=$_GET['id'];

                        $query = "SELECT * FROM tb_konsultasi where id=$id";
                        $eksekusi = mysqli_query($db, $query);
                        $data = mysqli_fetch_array($eksekusi);
                        $id = $data[0];
                        $nama_pelanggan = $data[1];
                        $tgl_konsultasi = $data[2];
                        $keluhan = $data[3];
                        $resep_apotek = $data[4];
                        $c_konsul = $data[5];
                        $rat_konsul = $data[6];

                            ?>


                  <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter nama" name="id" value="<?php echo $id?>">

                    <label for="exampleInputEmail1">Nama Konsultasi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama" name="nama_pelanggan" value="<?php echo      
                     $nama_pelanggan?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Konsultasi </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter tanggal" name="tgl_konsultasi" value="<?php echo 
                    $tgl_konsultasi?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keluhan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Keluhan" name="keluhan" value="<?php echo 
                    $keluhan?>">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Resep Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Resep Dokter " name="resep_apotek" value="<?php echo      
                     $resep_apotek?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Catatan Konsultasi </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Catatan Konsultasi" name="c_konsul" value="<?php echo 
                    $c_konsul?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rating Konsultasi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Rating" name="rat_konsul" value="<?php echo $rat_konsul?>">
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