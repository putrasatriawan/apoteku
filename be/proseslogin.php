<?php
session_start();
include "koneksidatabase.php";

$user = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_user where username='$user'
        AND password='$password' LIMIT 1";
$eksekusi = mysqli_query($db, $query);
$ada = mysqli_fetch_array($eksekusi);
if ($ada > 0) {

  $_SESSION['username'] = $ada[1];
  echo "<script>
            alert('Anda akan diarahkan ke halaman utama!');
            window.location='index.php';

    </script>";
} else {
  echo "<script>
    alert('Username dan Password tidak ditemukan!');
    window.location='login.php';

</script>";
}
