<?php 

include('layouts/header.php');

include('layouts/topbar.php');
?> 

<main>
    <!-- Hero Start -->
    <div class="container-fluid all-starups-area testimonial-area fix">
        <?php
        include "be/koneksidatabase.php";
        $id = $_GET['id'];

        $query = "SELECT * FROM cabang_tb WHERE id=$id";
        $eksekusi = mysqli_query($db, $query);
        $data = mysqli_fetch_array($eksekusi);

        if ($data) {
            ?>
            <div class="row justify-content-center">
                <!-- Right Contents  -->
                <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="starups-" style="border: 1px solid black; box-sizing: border-box;">
        <img src="be/<?php echo $data['gambar']; ?>" alt="Gambar Cabang" style="max-width: 100%; height: auto; display: block; border-radius: 5px;">
    </div>
</div>

                <!-- Left Contents -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    
                                </div>
                                <!-- Founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-text" style="text-align: left;">
                                    <p style="margin: 5px 0; font-weight: bold; color: black; border-bottom: 1px solid black; padding-bottom: 5px;"> Nama : <?= $data['nama'] ?></p>
                                    <p style="margin: 5px 0; font-weight: bold; color: black; border-bottom: 1px solid black; padding-bottom: 5px;"> Alamat : <?= $data['alamat'] ?></p>
                                    <p style="margin: 5px 0; font-weight: bold; color: black; border-bottom: 1px solid black; padding-bottom: 5px;"> Deskripsi : <?= $data['deskripsi'] ?></p>
                                    <p style="margin: 5px 0; font-weight: bold; color: black; border-bottom: 1px solid black; padding-bottom: 5px;">No Handphone : <?= $data['no_hp'] ?></p>
                                    <p style="margin: 5px 0; font-weight: bold; color: black; border-bottom: 1px solid black; padding-bottom: 5px;">Pelayanan : <?= $data['pelayanan'] ?></p>
                                </div>
                            </div>




                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        <?php
        } else {
            echo "Data tidak ditemukan";
        }
        ?>
    </div>
    <!-- Hero End -->
</main>

<?php 
include('layouts/footer.php');
?>
