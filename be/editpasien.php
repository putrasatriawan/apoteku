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
                <h3 class="card-title">Edit Pasien</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditpasien.php" method="POST"> 
                <div class="card-body">
                <?php
                        include "koneksidatabase.php";
                        $id=$_GET['id'];

                        $query = "SELECT * FROM tbl_pasien where id=$id";
                        $eksekusi = mysqli_query($db, $query);
                        $data = mysqli_fetch_array($eksekusi);
                            $id = $data[0];
                            $nama_pasien = $data[1];
                            $umur = $data[2];
                            $obat = $data[3];
                            $penyakit= $data[4];
                            $alamat = $data[5];
                            $tanggal = $data[6];
                       

                            ?>


                  <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Obat" name="id" value="<?php echo $id?>">

                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama " name="nama_pasien" value="<?php echo      
                     $nama_pasien?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Umur </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Umur" name="umur" value="<?php echo 
                    $umur?>">
                  </div>
                  <div class="form-group">
    <label for="dataobat">Nama Obat</label>
    <?php
    $queryObat = "SELECT * FROM tb_obat";
    $eksekusiObat = mysqli_query($db, $queryObat);
    ?>

    <select name="obat" id="obat" class="form-control">
        <option value="">Pilih Obat</option>
        <?php
        while ($dataObat = mysqli_fetch_assoc($eksekusiObat)) : ?>
            <option value="<?php echo $dataObat['id']; ?>" <?php echo ($dataObat['nama'] == $obat) ? 'selected' : ''; ?>><?php echo $dataObat['nama']; ?></option>
        <?php endwhile; ?>
    </select>
</div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Penyakit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bentuk Penyakit " name="penyakit" value="<?php echo      
                     $penyakit?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter alamat" name="alamat" value="<?php echo 
                    $alamat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tanggal" name="tanggal" value="<?php echo $tanggal?>">
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