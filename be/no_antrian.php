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
                        <!-- /.card-header -->
                        <div class="card-body">
                           <?php
                            include "koneksidatabase.php";
                            $query = "SELECT * FROM tb_no_antrian where id=1";
                            $eksekusi = mysqli_query($db, $query);
                            $data = mysqli_fetch_array($eksekusi);
                            $id = $data[0];
                            $no_antrian = $data[1];
                            ?>
                            <input type="number" id="no_antrian" value="<?php echo $no_antrian ?>" name="no_antrian">
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
<!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $("#no_antrian").change(function () {
            var noAntrian = $(this).val();

            $.ajax({
                type: "POST",
                url: "proses_ubah_no_antrian.php",
                data: { no_antrian: noAntrian },
                success: function (response) {
                    console.log(response);
                },
                error: function (error) {
                    console.error("Error:", error);
                }
            });
        });
    });
</script>

<?php include('layouts/footer.php')
?>