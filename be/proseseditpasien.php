<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$nama_pasien= $_POST['nama_pasien'];
$umur = $_POST['umur'];
$obat = $_POST['obat'];
$penyakit= $_POST['penyakit'];
$alamat = $_POST['alamat'];
$tanggal= $_POST['tanggal'];



$query = "UPDATE tbl_pasien set nama_pasien='$nama_pasien',
                                umur = '$umur',
                                 obat= '$obat',
                                penyakit = '$penyakit',
                                alamat = '$alamat',
                                tanggal = '$tanggal'
                              
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='pasien.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editpasien.php';

</script>";
}



?>