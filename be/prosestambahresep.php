<?php
include "koneksidatabase.php";
$nama= $_POST['nama'];
$no_hp= $_POST['no_hp'];
$resep= $_POST['resep'];
$dokter= $_POST['dokter'];



$query = "INSERT into resep (nama,no_hp,resep,dokter) VALUES 
            ('$nama','$no_hp','$resep','$dokter')";

$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='resep.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahresep.php';

</script>";
}



?>