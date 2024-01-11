<?php 
include('layouts/header.php');
include('layouts/topbar.php');
?> 
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>Apoteker</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Team Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Identitas</span>
                        <h2> Melayani dan Bertanggung jawab</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                    include "be/koneksidatabase.php";
                    $query = "SELECT * FROM apoteker";
                    $eksekusi = mysqli_query($db, $query);
                    while ($data = mysqli_fetch_array($eksekusi)) {

                      $id = $data[0];
                      $nama= $data[1];
                      $jabatan = $data[2];
                      $gambar = $data[3];
                    ?>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                        <img src="be/<?php echo $gambar ?>"  alt="Gambar Cabang" style="max-width: 390px; max-height: 482px;">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#"><?php echo $nama ?></a></h3>
                            <span><?php echo $jabatan ?></span>
                            <!-- Team social -->
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
    </main>
    <?php 
include('layouts/footer.php');
?>