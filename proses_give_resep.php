<?php
include "be/koneksidatabase.php";
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
            window.location='no_antrian_resep_user.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='give_resep_obat.php';

</script>";
}



?>