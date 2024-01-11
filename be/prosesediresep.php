<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$nama= $_POST['nama'];
$no_hp= $_POST['no_hp'];
$resep = $_POST['resep'];
$dokter= $_POST['dokter'];




$query = "UPDATE tbl_pasien set nama='$nama',
                                no_hp = '$no_hp',
                                 resep= '$resep',
                                dokter = '$dokter'
                                
                              
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='resep.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='editresep.php';

</script>";
}



?>