<?php
include "koneksidatabase.php";
$id =$_POST['id'];
$nama= $_POST['nama'];
$kategory_obat = $_POST['kategory_obat'];
$bentuk_obat = $_POST['bentuk_obat'];
$kandungan_obat= $_POST['kandungan_obat'];
$harga_obat = $_POST['harga_obat'];
$stok_obat= $_POST['stok_obat'];
$tgl_kdl = $_POST['tgl_kdl'];
$kode_obat = $_POST['kode_obat'];

if ($_FILES['gambar']['size'] > 0) {
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    $upload_dir = "uploads/";
    $gambar_path = $upload_dir . $gambar;

    move_uploaded_file($gambar_tmp, $gambar_path);
} else {
    // Jika tidak ada gambar baru, gunakan gambar yang sudah ada di database
    $gambar_path = $_POST['gambar_path'];
}



$query = "UPDATE tb_obat SET nama='$nama',
                                kategory_obat = '$kategory_obat',
                                bentuk_obat = '$bentuk_obat',
                                kandungan_obat = '$kandungan_obat',
                                harga_obat = '$harga_obat',
                                stok_obat = '$stok_obat',
                                tgl_kdl = '$tgl_kdl',
                                kode_obat = '$kode_obat',
                                gambar = '$gambar'
                                
                                WHERE id = '$id'";
$eksekusi = mysqli_query($db, $query);
if ($eksekusi){
    echo "<script> 
            alert('Data Berhasil diubah!');
            window.location='dataobat.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='ediobat.php';

</script>";
}



?>