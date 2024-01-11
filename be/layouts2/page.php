<?php include("layouts2/header.php");

?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


<?php
  include("layouts2/topbar.php");
  ?>
  
  <?php
  include("layouts2/sidemenu.php");
  ?>
  

  
  <?php
  include("layouts2/footer.php");
  ?>


</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>



