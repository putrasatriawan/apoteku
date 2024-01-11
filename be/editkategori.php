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
                            <h3 class="card-title">Edit Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="proseseditkategori.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php
                                include "koneksidatabase.php";
                                $id = $_GET['id'];

                                $query = "SELECT * FROM tb_kategori WHERE id=$id";
                                $eksekusi = mysqli_query($db, $query);
                                $data = mysqli_fetch_array($eksekusi);
                                $id = $data['id'];
                                $nama_k = $data['nama_k'];
                                $deskripsi = $data['deskripsi'];
                                $gambar = $data['gambar'];
                                $icon = $data['icon'];
                                ?>

                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                                    <input type="hidden" class="form-control" name="gambar_path" value="<?php echo $gambar ?>">
                                    <input type="hidden" class="form-control" name="icon_path" value="<?php echo $icon ?>">

                                    <label for="nama_kategori">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_k" value="<?php echo $nama_k ?>">
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $deskripsi ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar Kategori</label>
                                    <br>
                                    <img src="<?php echo $gambar ?>" alt="" style="max-width: 300px; max-height: 200px;">
                                    <br>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                </div>

                                <div class="form-group">
                                    <label for="icon">Gambar Icons</label>
                                    <br>
                                    <img src="<?php echo $icon ?>" alt="" style="max-width: 300px; max-height: 200px;">
                                    <br>
                                    <input type="file" class="form-control" id="icon" name="icon">
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
