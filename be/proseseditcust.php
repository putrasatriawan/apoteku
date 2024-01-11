<?php
include "koneksidatabase.php";

$id_cust = $_POST['id'];
$nama_cust = $_POST['nama_cust'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$status = $_POST['status'];


$query = "UPDATE tb_customer set nama_cust='$nama_cust',
                                alamat = '$alamat',
                                no_hp = '$nohp',
                                email = '$email',
                                status = '$status'
                                WHERE id_cust = '$id_cust'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='datacustomer.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='tambahcustomer.php';

</script>";
}



?>