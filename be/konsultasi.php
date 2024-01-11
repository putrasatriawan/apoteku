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
                <h3 class="card-title"><a href="tambahkonsultasi.php"><button>Tambah Konsultasi</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Konsultasi</th>
                    <th>Keluhan</th>
                    <th>Resep Dokter</th>
                    <th>Catatan Konsultasi</th>
                    <th>Rating Konsultasi</th>
                    <th>Action</th>

                  </tr>     
                  </thead>
                  <tbody>       
                    <?php
                        include "koneksidatabase.php";
                        $query = "SELECT * FROM tb_konsultasi";
                        $eksekusi = mysqli_query($db, $query);
                        while($data = mysqli_fetch_array($eksekusi)){
                          
                            $id = $data[0];
                            $nama_pelanggan = $data[1];
                            $tgl_konsultasi = $data[2];
                            $keluhan = $data[3];
                            $resep_apotek = $data[4];
                            $c_konsul = $data[5];
                            $rat_konsul = $data[6];
                            
                            
                           
                            ?>
                            
                            
                        <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $nama_pelanggan?></td>
                            <td><?php echo $tgl_konsultasi?></td>
                            <td><?php echo $keluhan?></td>
                            <td><?php echo $resep_apotek?></td>
                            <td><?php echo $c_konsul?></td>
                            <td><?php echo $rat_konsul?></td>
                            
                           

                            <td>
                              <a href="editkonsul.php?id=<?php echo $id?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="deletekonsul.php?id=<?php echo $id?>"><button class="btn btn-success">Hapus</button></a>
                            </td>

                        </tr>

                        <?php
                        }
                    ?>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Pelnggan</th>
                    <th>Tanggal Konsultasi</th>
                    <th>Keluhan</th>
                    <th>Resep Dokter</th>
                    <th>Catatan Konsultasi</th>
                    <th>Rating Konsultasi</th>
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