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
                            <?php
                            include "be/koneksidatabase.php";
                            $query = "SELECT * FROM resep ORDER BY id DESC LIMIT 1;                            ";
                            $eksekusi = mysqli_query($db, $query);
                            $data = mysqli_fetch_array($eksekusi);
                            $id = $data[0];
                            $resep = $data[1];
                            ?>
                            <h2>Antrian Anda <?php echo $id ?> </h2>
                           
                            <button onclick="refreshPage()" class="btn btn-primary">Refresh No Antrian</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- ================ contact section start ================= -->

    <!-- ================ contact section end ================= -->
</main>
<?php 
include('layouts/footer.php');
?> 

<script>
    function refreshPage() {
        location.reload();
    }
</script>
