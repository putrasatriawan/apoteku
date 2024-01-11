<?php
include "koneksidatabase.php";
$name= $_POST['name'];
$phone= $_POST['phone'];
$gender= $_POST['gender'];
$email= $_POST['subject'];
$message= $_POST['message'];



$query = "INSERT into kontak_tb (name,phone,gender,email,message) VALUES 
            ('$name','$phone','$gender','$email','$message')";

$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil ditambahkan!');
            window.location='kontak.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal ditambahkan!');
    window.location='tambahkontak.php';

</script>";
}



?>