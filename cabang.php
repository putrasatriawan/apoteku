<?php 
include('layouts/header.php');
include('layouts/topbar.php');
?> 
<main>
    <!--? Hero Start -->
          <!--? Blog start -->
          <div class="_blog-area section-padding30">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <!-- Section Title -->
                <div class="section-tittle text-center mb-70">
                    <span>Cabang Apoteku</span>
                    <h2>Ini Cabang terkini Saat Ini</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
                    include "be/koneksidatabase.php";
                    $query = "SELECT * FROM cabang_tb";
                    $eksekusi = mysqli_query($db, $query);
                    $no = 1; // 
                    while ($data = mysqli_fetch_array($eksekusi)) {

                      $id = $data['id']; 
                      $nama = $data['nama'];
                      $alamat = $data['alamat'];
                      $deskripsi = $data['deskripsi'];
                      $no_hp = $data['no_hp'];
                      $pelayanan = $data['pelayanan'];
                      $gambar = $data['gambar'];
                       
                    ?>
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="be/<?php echo $gambar ?>"  alt="Gambar Cabang" style="max-width: 390px; max-height: 482px;">
                    
                            </div>
                            <div class="team-caption">
                                <h3><a href="#"><?php echo $nama ?></a></h3>
                                <span><?php echo $alamat ?></span>
                            
                    
                                <!-- Team social -->
                                <div class="team-social">
                                    <a href="detailcabang.php?id=<?php echo $id ?>"><button class="btn btn-success">Detail</button></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }  
                    ?> 
         </div>
    </div>
</div>


</main>
<?php 
include('layouts/footer.php');
?> 

<script>
    function refreshPage() {
        location.reload();
    }
</script>
