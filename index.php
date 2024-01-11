
<?php 
include('layouts/header.php');
include('layouts/topbar.php');
?> 
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span>Berkomitmen untuk sukses</span>
                                    <h1 class="cd-headline letters scale">Kami peduli dengan 
                                        <strong class="cd-words-wrapper">
                                            <b class="is-visible">Kesehatan</b>
                                            <b>Kenyamanan</b>
                                            <b>Kemudahan</b>
                                        </strong>
                                    </h1>
                                    <p data-animation="fadeInLeft"
                                       data-delay="0.1s">Dengan senang hati kami menyambut Anda di Apotek Kami. Kami berkomitmen untuk memberikan pelayanan terbaik, dimulai dari pencegahan hingga perawatan.</p>
                                    <a href="give_resep_obat.php"
                                       class="btn hero-btn"
                                       data-animation="fadeInLeft"
                                       data-delay="0.5s">Berikan Resep <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                <span>Berkomitmen untuk sukses</span>
                                    <h1 class="cd-headline letters scale">Kami peduli dengan 
                                        <strong class="cd-words-wrapper">
                                            <b class="is-visible">Kesehatan</b>
                                            <b>Kenyamanan</b>
                                            <b>Kemudahan</b>
                                        </strong>
                                    </h1>
                                    <p data-animation="fadeInLeft"
                                       data-delay="0.1s">Dengan senang hati kami menyambut Anda di Apotek Kami. Kami berkomitmen untuk memberikan pelayanan terbaik, dimulai dari pencegahan hingga perawatan.</p>
                                    <a href="give_resep_obat.php"
                                       class="btn hero-btn"
                                       data-animation="fadeInLeft"
                                       data-delay="0.5s">Berikan Resep <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Start-->
        <div class="about-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-35">
                                <span>Layanan Kami !</span>
                                <h2>Selamat Datang Di Apoteku</h2>
                            </div>
                            <p> <table><h3>Tersedia berbagai macam jenis obat yang di sediakan dari apoteku terpecaya dan aman untuk digunakan pada kesehatan anda</h3></table></p>
                            <div class="about-btn1 mb-30">
                                <a href="give_resep_obat.php"
                                   class="btn about-btn">Berikan Resep <i class="ti-arrow-right"></i></a>
                            </div>
                            <div class="about-btn1 mb-30">
                                <a href="take_no_antrian.php"
                                   class="btn about-btn2">Ambil No Antrian <i class="ti-arrow-right"></i></a>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/tampilan1.jpg" alt="" style="width: 158%; border-radius: px;">
                                     
                            </div>
                            <div class="about-back-img ">
                                
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About  End-->
        <!--? department_area_start  -->
        <div class="department_area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-100">
                            <span>Macam-macam Obat dan Gejala</span>
                            <h2>Apoteku</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
    <div class="col-lg-12">
        <div class="depart_ment_tab mb-30">
            <!-- Tabs Buttons -->
            <ul class="nav" id="myTab" role="tablist">
                <?php
                include "be/koneksidatabase.php";
                $query = "SELECT * FROM tb_kategori";
                $eksekusi = mysqli_query($db, $query);
                $firstTab = true;
                while ($data = mysqli_fetch_array($eksekusi)) {
                    $id = $data[0];
                    $nama_k = $data[1];
                    $deskripsi = $data[2];
                    $icon = $data[4];
                   
                    ?>
                    <li class="nav-item">
    <a class="nav-link <?php echo $firstTab ? 'active' : ''; ?>"
       id="<?php echo $id ?>-tab"
       data-toggle="tab"
       href="#<?php echo $id ?>"
       role="tab"
       aria-controls="<?php echo $id ?>"
       aria-selected="true">

        <div class="d-flex flex-column align-items-center">
            <img src="be/<?php echo $icon ?>" alt="Gambar Kategori" style="max-width: 50px; max-height: 50px;">
            <h4><?php echo $nama_k ?></h4>
        </div>

    </a>
</li>

                    <?php
                    $firstTab = false;
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div class="dept_main_info white-bg">
    <div class="tab-content" id="myTabContent">
        <?php
        // Reset the $firstTab flag
        $firstTab = true;
        $eksekusi = mysqli_query($db, $query);
        while ($data = mysqli_fetch_array($eksekusi)) {
            $id = $data[0];
            $nama_k = $data[1];
            $deskripsi = $data[2];
            $gambar = $data[3];
            ?>
            
            <div class="tab-pane fade show <?php echo $firstTab ? 'active' : ''; ?>"
                 id="<?php echo $id ?>"
                 role="tabpanel"
                 aria-labelledby="<?php echo $id ?>-tab">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-7">
                        <div class="dept_info">
                            <h3><?php echo $nama_k ?> <br></h3>
                            <p><?php echo $deskripsi ?> </p>
                            <a href="obat_preview.php?kategory_obat=<?php echo $id?>" class="dep-btn">Selengkapnya<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="dept_thumb">
                        <img src="be/<?php echo $gambar ?>"  alt="Gambar Kategori" style="max-width: 390px; max-height: 482px;">
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $firstTab = false;
        }
        ?>
    </div>
</div>



            </div>
        </div>
        <div class="all-starups-area testimonial-area fix">
    <!-- left Contents -->
    <div class="starups">
        <!--? Testimonial Start -->
        <div class="h1-testimonial-active">
            <!-- Single Testimonial -->
            <div class="single-testimonial text-center">
                <!-- Testimonial Content -->
                <div class="testimonial-caption p-4">
                    <div class="testimonial-top-cap">
                        <img src="assets/img/gallery/testimonial.png" alt="">
                        <p>"Apotek adalah jantung sistem perawatan kesehatan. Mereka bukan hanya tempat di mana obat diambil, tetapi juga sumber pengetahuan dan dukungan untuk kesehatan masyarakat." </p>
                    </div>
                    <!-- founder -->
                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                        <div class="founder-img">
                            <img src="assets/img/gallery/1.png" alt="" style="width: 100px; border-radius: 30px;">
                        </div>
                        <div class="founder-text">
                            <span>Margaret Chan</span>
                            <p>Mantan Direktur Jenderal WHO.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </div>
    <!-- Right Contents -->
    <div style="width: 40%;">
        <img src="assets/img/gallery/tampilan3.jpg" alt="" style="width: 158%; border-radius: px;">
    </div>
</div>

        <!--All startups End -->
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
        <!--? Contact form Start -->
        <div class="contact-form-main">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-xl-12">
                                        <div class="section-tittle section-tittle2">
                                            <span>Hubungi Kami</span>
                                            <h2>Apoteku</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="be/prosestambahkontak.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text"
                                                   name="name"
                                                   placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text"
                                                   name="email"
                                                   placeholder="No hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="gender" id="select2">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email"
                                                   name="subject"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-65">
                                            <textarea name="message"
                                                      id="message"
                                                      placeholder="Pesan"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn"
                                                    type="submit">Kirim Sekarang <i class="ti-arrow-right"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact left Img-->
            <div class="from-left d-none d-lg-block">
                <img src="assets/img/gallery/dua.jpg"
                     alt="">
            </div>
        </div>
        <!-- Contact form End -->
        <!--? gallery Products Start -->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img "
                                     style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img "
                                     style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img "
                                     style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img "
                                     style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img "
                                     style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img "
                                     style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery Products End -->

    </main>
<?php 
include('layouts/footer.php');
?>