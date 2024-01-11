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
                    <span>Obat Apoteku</span>
                    <h2>Obat Terbaru Saat Ini</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            include "be/koneksidatabase.php";
            $id = $_GET['kategory_obat'];

            $query = "SELECT * FROM tb_obat WHERE kategory_obat = $id";
            $eksekusi = mysqli_query($db, $query);

            while ($data = mysqli_fetch_array($eksekusi)) {
                $id_detail = $data[0];
                $kode_obat = $data[1];
                $nama = $data[2];
                $harga_obat = $data[6];
                $kandungan_obat = $data[5];
                $tgl_kdl = $data[8];
                $gambar = $data['gambar'];

                ?>
               <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="card mb-4 text-center" style="position: relative;">
             <img src="be/uploads/<?php echo $gambar ?>" alt="Gambar" style="max-width: 150px; max-height: 200px; display: block; margin: 0 auto;">
             <div class="card-body">
            <h5 class="card-title"><?php echo $kandungan_obat ?></h5>
            <p class="card-text">
                <span class="font-weight-bold">Harga Obat:</span> <?php echo $harga_obat ?><br>
                <span class="font-weight-bold">Nama Obat:</span> <?php echo $nama ?><br>
                <span class="font-weight-bold">Tanggal Kadaluarsa:</span> <?php echo $tgl_kdl ?>
            </p>
            
            <div style="margin-top: 60px;"> 
                <a href="detailobat.php?detail_obat=<?php echo $id_detail ?>" style="position: absolute; bottom: 0; right: 0;">
                    <button class="btn btn-success">Detail</button>
                </a>
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
