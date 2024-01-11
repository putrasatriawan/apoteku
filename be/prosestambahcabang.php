<?php
include "koneksidatabase.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$no_hp = $_POST['no_hp'];
$pelayanan = $_POST['pelayanan'];
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];



$upload_dir = "uploads/";

$gambar_path = $upload_dir . $gambar;


move_uploaded_file($gambar_tmp, $gambar_path);


$query = "INSERT INTO cabang_tb (nama,alamat, deskripsi,no_hp,pelayanan, gambar ) VALUES ('$nama', '$alamat','$deskripsi','$no_hp','$pelayanan', '$gambar_path')";

$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='cabang.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='tambahcabang.php';
          </script>";
}

mysqli_close($db);
?>
