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
                <h3 class="card-title"><a href="tambahpasien.php"><button>Tambah Pasien</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasien </th>
                    <th>Umur</th>
                    <th>Obat</th>
                    <th>Penyakit</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    
                    <th>Action</th>

                  </tr>     
                  </thead>
                  <tbody>       
                    <?php
                        include "koneksidatabase.php";
                        $query = "SELECT * FROM tbl_pasien";
                        $eksekusi = mysqli_query($db, $query);
                        while($data = mysqli_fetch_array($eksekusi)){
                          
                            $id = $data[0];
                            $nama_pasien = $data[1];
                            $umur = $data[2];
                            $obat = $data[3];
                            $penyakit= $data[4];
                            $alamat = $data[5];
                            $tanggal = $data[6];
                            ?>
                            
                            
                        <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $nama_pasien?></td>
                            <td><?php echo $umur?></td>
                            <td><?php echo $obat?></td>
                            <td><?php echo $penyakit?></td>
                            <td><?php echo $alamat?></td>
                            <td><?php echo $tanggal?></td>
                            
                            <td>
                              <a href="editpasien.php?id=<?php echo $id?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="deletepasien.php?id=<?php echo $id?>"><button class="btn btn-success">Hapus</button></a>
                            </td>

                        </tr>

                        <?php
                        }
                    ?>


                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama Pasien </th>
                    <th>Umur</th>
                    <th>Obat</th>
                    <th>Penyakit</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    
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