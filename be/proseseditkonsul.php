<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$nama_pelanggan= $_POST['nama_pelanggan'];
$tgl_konsultasi = $_POST['tgl_konsultasi'];
$keluhan = $_POST['keluhan'];
$resep_apotek= $_POST['resep_apotek'];
$c_konsul = $_POST['c_konsul'];
$rat_konsul= $_POST['rat_konsul'];




$query = "UPDATE tb_konsultasi set nama_pelanggan='$nama_pelanggan',
                                tgl_konsultasi = '$tgl_konsultasi',
                                keluhan = '$keluhan',
                                resep_apotek = '$resep_apotek',
                                c_konsul = '$c_konsul',
                                rat_konsul = '$c_konsul'
                                
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='konsultasi.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editkonsul.php';

</script>";
}



?>