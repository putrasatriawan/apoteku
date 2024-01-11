<?php
include "koneksidatabase.php";
$nama_pasien = $_POST['nama_pasien'];
$umur= $_POST['umur'];
$obat= $_POST['obat'];
$penyakit = $_POST['penyakit'];
$alamat= $_POST['alamat'];
$tanggal = $_POST['tanggal'];




$query = "INSERT into tbl_pasien (nama_pasien, umur,obat, penyakit,alamat, tanggal) VALUES 
            ('$nama_pasien', '$umur', '$obat', '$penyakit', '$alamat', '$tanggal' )";

$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='pasien.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahpasien.php';

</script>";
}



?>