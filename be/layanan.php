<?php include('layouts/header.php') ?>
<?php include('layouts/topbar.php') ?>
<?php include('layouts/sidemenu.php') ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="tambahlayanan.php"><button>Tambah Layanan</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Deskripsi Layanan</th>
                    <th>Biaya Layanan</th>
                    <th>Waktu Layanan</th>
                    <th>Tanggal Dibuat </th>
                    <th>Status Layanan</th>
                    <th>Rating Layanan</th>
                    <th>Action</th>

                  </tr>     
                  </thead>
                  <tbody>       
                    <?php
                        include "koneksidatabase.php";
                        $query = "SELECT * FROM tb_layanan";
                        $eksekusi = mysqli_query($db, $query);
                        while($data = mysqli_fetch_array($eksekusi)){
                          
                            $id = $data[0];
                            $nama_layanan = $data[1];
                            $deskripsi_layanan = $data[2];
                            $biaya_layanan = $data[3];
                            $waktu_layanan = $data[4];
                            $tgl_layanan = $data[5];
                            $status_layanan = $data[6];
                            $rating_layanan = $data[7];
                            
                            
                           
                            ?>
                            
                            
                        <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $nama_layanan?></td>
                            <td><?php echo $deskripsi_layanan?></td>
                            <td><?php echo $biaya_layanan?></td>
                            <td><?php echo $waktu_layanan?></td>
                            <td><?php echo $tgl_layanan?></td>
                            <td><?php echo $status_layanan?></td>
                            <td><?php echo $rating_layanan?></td>
                            
                           

                            <td>
                              <a href="editlayanan.php?id=<?php echo $id?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="deletelayanan.php?id=<?php echo $id?>"><button class="btn btn-success">Hapus</button></a>
                            </td>

                        </tr>

                        <?php
                        }
                    ?>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Deskripsi Layanan</th>
                    <th>Biaya Layanan</th>
                    <th>Waktu Layanan</th>
                    <th>Tanggal Dibuat </th>
                    <th>Status Layanan</th>
                    <th>Rating Layanan</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </div>
 
    <?php include('layouts/footer.php') ?>