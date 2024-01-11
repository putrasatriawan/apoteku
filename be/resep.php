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
                <h3 class="card-title"><a href="tambahresep.php"><button>Tambah Resep</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>No hp</th>
                    <th> Resep</th>
                    <th>Dokter</th>
                  
                    
                    <th>Action</th>

                  </tr>     
                  </thead>
                  <tbody>       
                    <?php
                        include "koneksidatabase.php";
                        $query = "SELECT * FROM resep";
                        $eksekusi = mysqli_query($db, $query);
                        while($data = mysqli_fetch_array($eksekusi)){
                          
                            $id = $data[0];
                            $nama = $data[1];
                            $no_hp = $data[2];
                            $resep = $data[3];
                            $dokter= $data[4];
                           
                           
                            ?>
                            
                            
                        <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $nama?></td>
                            <td><?php echo $no_hp?></td>
                            <td><?php echo $resep?></td>
                            <td><?php echo $dokter?></td>
                            
                            
                            <td>
                              <a href="editresep.php?id=<?php echo $id?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="deleteresep.php?id=<?php echo $id?>"><button class="btn btn-success">Hapus</button></a>
                            </td>

                        </tr>

                        <?php
                        }
                    ?>


                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama </th>
                    <th>No hp</th>
                    <th> Resep</th>
                    <th>Dokter</th>
                  
                    
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