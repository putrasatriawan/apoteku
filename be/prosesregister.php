<?php
session_start();
include "koneksidatabase.php";

$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$query = "INSERT INTO tbl_user (username, password, no_hp, email) VALUES ('$username', '$password', '$no_hp', '$email')";
$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
  echo "<script>
            alert('Data Berhasil ditambahkan!');
            window.location='login.php';
        </script>";
} else {
  echo "<script>
            alert('Data Gagal ditambahkan!');
            window.location='register.php';
        </script>";
}
