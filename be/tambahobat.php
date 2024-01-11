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
              <h3 class="card-title">Tambah Obat</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="prosestambahobat.php" method="POST"enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Obat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode" name="kode_obat">
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">kategory_obat</label>
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
                <label for="exampleInputEmail1">Nama Obat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Obat" name="nama">

                <div class="form-group">
                  <label for="exampleInputEmail1">Bentuk Obat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Bentuk Obat" name="bentuk_obat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kandungan Obat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter kandungan Obat" name="kandungan_obat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Obat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Harga Obat" name="harga_obat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok Obat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Stok Obat" name="stok_obat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Kadaluarsa" name="tgl_kdl">
                </div>
                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*">
                                            <label class="custom-file-label" for="gambar" id="fileInputLabelGambar">Pilih file</label>
                                        </div>
                                    </div>
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