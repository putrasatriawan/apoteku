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
                <h3 class="card-title">Tambah Pasien</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosestambahpasien.php" method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Pelanggan" name="nama_pasien">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Umur</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter umur" name="umur">
                  </div>
                  <div class="form-group">
    <label for="obat">Nama Obat</label>
    <?php
    include "koneksidatabase.php";
    $query = "SELECT * FROM tb_obat";
    $eksekusi = mysqli_query($db, $query);
    ?>

    <select name="obat" class="form-control">
        <option value="">Pilih Obat</option>
        <?php
        while ($data = mysqli_fetch_assoc($eksekusi)) :
            ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
        <?php endwhile; ?>
    </select>
</div>


              <div class="form-group">
                    <label for="exampleInputEmail1">Penyakit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="penyakit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Catatan alamat" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Rating tgl" name="tanggal">
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