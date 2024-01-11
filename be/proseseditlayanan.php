<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$nama_layanan = $_POST['nama_layanan'];
$deskripsi_layanan = $_POST['deskripsi_layanan'];
$biaya_layanan = $_POST['biaya_layanan'];
$waktu_layanan = $_POST['waktu_layanan'];
$tgl_layanan = $_POST['tgl_layanan'];
$status_layanan = $_POST['status_layanan'];
$rating_layanan = $_POST['rating_layanan'];





$query = "UPDATE tb_layanan set nama_layanan='$nama_layanan',
                                deskripsi_layanan='$deskripsi_layanan',
                                biaya_layanan='$biaya_layanan',
                                waktu_layanan='$waktu_layanan',
                                tgl_layanan='$tgl_layanan',
                                status_layanan='$status_layanan',
                                rating_layanan='$rating_layanan'
                                                   
                                
                                
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='layanan.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editlayanan.php';

</script>";
}



?>