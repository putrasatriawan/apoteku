
<?php 
include('layouts/header.php');
include('layouts/topbar.php');
?> 
    <main>
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
                                            <span>Berikan Resep Form Dari Dokter Anda</span>
                                            <h2>Resep Form</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form"
                                  action="proses_give_resep.php"
                                  method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text"
                                                   name="nama"
                                                   placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text"
                                                   name="no_hp"
                                                   placeholder="Masukan No Hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="text"
                                                   name="dokter"
                                                   placeholder="Masukan Dokter">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-65">
                                            <textarea name="resep"
                                                      id="resep"
                                                      placeholder="Masukan Resep"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn"
                                                    type="submit">Submit Now <i class="ti-arrow-right"></i> </button>
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
                <img src="assets/img/gallery/contact_form.png"
                     alt="">
            </div>
        </div>
        <!-- Contact form End -->
        <!--? gallery Products Start -->
       
        <!-- Blog End -->
    </main>
<?php 
include('layouts/footer.php');
?>