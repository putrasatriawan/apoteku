<?php
include "koneksidatabase.php";

$nama_k = $_POST['nama_k'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];

$icon = $_FILES['icon']['name'];
$icon_tmp = $_FILES['icon']['tmp_name'];

$upload_dir = "uploads/";

$gambar_path = $upload_dir . $gambar;
$icon_path = $upload_dir . $icon;

move_uploaded_file($gambar_tmp, $gambar_path);
move_uploaded_file($icon_tmp, $icon_path);

$query = "INSERT INTO tb_kategori (nama_k, deskripsi, gambar, icon) VALUES ('$nama_k', '$deskripsi', '$gambar_path', '$icon_path')";

$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='kategori.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='tambahkategori.php';
          </script>";
}

mysqli_close($db);
?>
