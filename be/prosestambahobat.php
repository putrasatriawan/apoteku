<?php
include "koneksidatabase.php";
$kode_obat = $_POST['kode_obat'];
$nama= $_POST['nama'];
$kategory_obat = $_POST['kategory_obat'];
$bentuk_obat = $_POST['bentuk_obat'];
$kandungan_obat= $_POST['kandungan_obat'];
$harga_obat = $_POST['harga_obat'];
$stok_obat= $_POST['stok_obat'];
$tgl_kdl = $_POST['tgl_kdl'];
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];

$upload_dir = "uploads/";

$gambar_path = $upload_dir . $gambar;


move_uploaded_file($gambar_tmp, $gambar_path);



$query = "INSERT into tb_obat (kode_obat, nama,kategory_obat, bentuk_obat,kandungan_obat, harga_obat, stok_obat, tgl_kdl, gambar) VALUES 
            ('$kode_obat', '$nama', '$kategory_obat', '$bentuk_obat', '$kandungan_obat', '$harga_obat', '$stok_obat', '$tgl_kdl', '$gambar')";

$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='dataobat.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahobat.php';

</script>";
}



?>