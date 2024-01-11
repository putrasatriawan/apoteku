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
                              $query = "SELECT * FROM take_antrian where id=1";
                              $eksekusi = mysqli_query($db, $query);
                              $data = mysqli_fetch_array($eksekusi);
                              $id = $data[0];
                              $no_antrian = $data[1];
                              ?>
                            <h2>Ambil No Antrian <?php echo $no_antrian + 1 ?> </h2>
                            <input type="hidden" id="take_antrian" value="<?php echo $no_antrian ?>" name="take_antrian">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#noAntrianModal" onclick="ambilNoAntrian()">Ambil No Antrian</button>
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
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="noAntrianModal" tabindex="-1" role="dialog" aria-labelledby="noAntrianModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="noAntrianModalLabel">Detail No Antrian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>No Antrian Anda: <span id="detailNoAntrian"><?php echo $no_antrian + 1 ?></span></p>
                <!-- Add additional information or details here -->
                <p>Jangan lupa screenshoot bukti no antrian ini.</p>
            </div>
            <div class="modal-footer">
                <button  onclick="refreshPage()"   type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<?php 
include('layouts/footer.php');
?> 

<script>
    function refreshPage() {
        location.reload();
    }

    function ambilNoAntrian() {
        var noAntrian = $("#take_antrian").val();

        $.ajax({
            type: "POST",
            url: "proses_take_antrian.php",
            data: { take_antrian: noAntrian },
            success: function (response) {
                // Update the modal content with the new queue number
           
            },
            error: function (error) {
                console.error("Error:", error);
            }
        });
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Your existing script here
    });
</script>
