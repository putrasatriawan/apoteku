<?php
include "koneksidatabase.php";

$id = $_GET['id'];


$query = "DELETE FROM tb_obat WHERE id = $id";
$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='dataobat.php';
    
    </script>";
} else {
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='dataobat.php';

</script>";
}
