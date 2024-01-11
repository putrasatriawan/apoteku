<?php
include "koneksidatabase.php";

$id = $_GET['id'];


$query = "DELETE FROM cabang_tb WHERE id = $id";
$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='cabang.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='cabang.php';

</script>";
}
