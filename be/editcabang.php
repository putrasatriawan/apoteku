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
                            <h3 class="card-title">Edit Cabang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="proseseditcabang.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php
                                include "koneksidatabase.php";
                                $id = $_GET['id'];

                                $query = "SELECT * FROM cabang_tb WHERE id=$id";
                                $eksekusi = mysqli_query($db, $query);
                                $data = mysqli_fetch_array($eksekusi);
                                $id = $data['id'];
                                $nama = $data['nama'];
                                $alamat = $data['alamat'];
                                $deskripsi = $data['deskripsi'];
                                $no_hp = $data['no_hp'];
                                $pelayanan = $data['pelayanan'];
                                $gambar = $data['gambar'];
                               
                                ?>

                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                                    <input type="hidden" class="form-control" name="gambar_path" value="<?php echo $gambar ?>">

                                    <label for="nama">Nama Cabang</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat"><?php echo $alamat ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $deskripsi ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No Hp</label>
                                    <textarea class="form-control" id="no_hp" name="no_hp"><?php echo $no_hp ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="pelayanan">Pelayanan</label>
                                    <textarea class="form-control" id="pelayanan" name="pelayanan"><?php echo $pelayanan ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar Kategori</label>
                                    <br>
                                    <img src="<?php echo $gambar ?>" alt="" style="max-width: 300px; max-height: 200px;">
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
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('layouts/footer.php') ?>
