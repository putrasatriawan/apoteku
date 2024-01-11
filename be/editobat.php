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
                <h3 class="card-title">Edit Obat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proseseditobat.php" method="POST"enctype="multipart/form-data"> 
                <div class="card-body">
                <?php
                        include "koneksidatabase.php";
                        $id=$_GET['id'];

                        $query = "SELECT * FROM tb_obat where id=$id";
                        $eksekusi = mysqli_query($db, $query);
                        $data = mysqli_fetch_array($eksekusi);
                        $id = $data[0];
                        $kode_obat = $data[1];
                        $nama = $data[2];
                        $kategory_obat = $data[3];
                        $bentuk_obat= $data[4];
                        $kandungan_obat = $data[5];
                        $harga_obat = $data[6];
                        $stok_obat = $data[7];
                        $tgl_kdl = $data[8];
                        $gambar = $data['gambar'];
                       

                            ?>


                  <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Obat" name="id" value="<?php echo $id?>">
                  <input type="hidden" class="form-control" name="gambar_path" value="<?php echo $gambar ?>">

                    <label for="exampleInputEmail1">Kode Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode " name="kode_obat" value="<?php echo      
                     $kode_obat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter nama obat" name="nama" value="<?php echo 
                    $nama?>">
                <label for="exampleInputEmail1">kategori Obat</label>
                <?php
                include "koneksidatabase.php";
                $query = "SELECT * FROM tb_kategori";
                $eksekusi = mysqli_query($db, $query);
                ?>

                <select name="kategory_obat" id="" class="form-control">
                  <option value="">Pilih Kategori</option>
                  <?php
                  while ($data = mysqli_fetch_assoc($eksekusi)) : ?>
                    <option value="<?php echo $data['id']; ?>"><?php echo $data['nama_k']; ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Bentuk Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bentuk Obat " name="bentuk_obat" value="<?php echo      
                     $bentuk_obat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kandungan Obat  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kandungan obat" name="kandungan_obat" value="<?php echo 
                    $kandungan_obat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Harga" name="harga_obat" value="<?php echo $harga_obat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok Obat  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Stok obat" name="stok_obat" value="<?php echo 
                    $stok_obat?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter kadaluarsa" name="tgl_kdl" value="<?php echo $tgl_kdl?>">
                  </div>
                  <div class="form-group">
                                    <label for="gambar">Gambar </label>
                                    <br>
                                    <img src="uploads/<?php echo $gambar ?>" alt="" style="max-width: 300px; max-height: 200px;">
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