<?php
include "koneksidatabase.php";
$nama_layanan = $_POST['nama_layanan'];
$deskripsi_layanan = $_POST['deskripsi_layanan'];
$biaya_layanan = $_POST['biaya_layanan'];
$waktu_layanan = $_POST['waktu_layanan'];
$tgl_layanan = $_POST['tgl_layanan'];
$status_layanan = $_POST['status_layanan'];
$rating_layanan = $_POST['rating_layanan'];







$query = "INSERT into tb_layanan(nama_layanan, deskripsi_layanan,biaya_layanan,waktu_layanan,tgl_layanan,status_layanan,rating_layanan) VALUES 
            ('$nama_layanan','$deskripsi_layanan','$biaya_layanan','$waktu_layanan','$tgl_layanan','$status_layanan','$rating_layanan' )";

$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='layanan.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahlayanan.php';

</script>";
}

