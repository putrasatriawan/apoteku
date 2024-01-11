<?php
include "koneksidatabase.php";

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan']; 


$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];


$upload_dir = "uploads/";


$gambar_path = $upload_dir . $gambar;
move_uploaded_file($gambar_tmp, $gambar_path);


$query = "INSERT INTO apoteker (nama, jabatan, gambar) VALUES ('$nama', '$jabatan', '$gambar_path')";

$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='apoteker.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='tambahapoteker.php';
          </script>";
}

mysqli_close($db);
?>
