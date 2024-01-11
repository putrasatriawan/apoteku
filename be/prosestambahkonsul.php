<?php
include "koneksidatabase.php";
$nama_pelanggan = $_POST['nama_pelanggan'];
$tgl_konsultasi= $_POST['tgl_konsultasi'];
$keluhan = $_POST['keluhan'];
$resep_apotek= $_POST['resep_apotek'];
$c_konsul= $_POST['c_konsul'];
$rat_konsul= $_POST['rat_konsul'];




$query = "INSERT into tb_konsultasi(nama_pelanggan, tgl_konsultasi,keluhan, resep_apotek,c_konsul, rat_konsul) VALUES 
            ('$nama_pelanggan', '$tgl_konsultasi', '$keluhan', '$resep_apotek', '$c_konsul', '$rat_konsul')";

$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='konsultasi.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahkonsultasi.php';

</script>";
}

