<?php
include "koneksidatabase.php";

// Periksa apakah formulir telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; // Anggap Anda memiliki ID untuk data yang ingin diedit

    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    // Periksa apakah gambar baru diunggah
    if ($_FILES['gambar']['size'] > 0) {
        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];

        $upload_dir = "uploads/";
        $gambar_path = $upload_dir . $gambar;

        move_uploaded_file($gambar_tmp, $gambar_path);

        // Perbarui data dengan gambar baru
        $query = "UPDATE apoteker SET nama='$nama', jabatan='$jabatan', gambar='$gambar_path' WHERE id=$id";
    } else {
        // Perbarui data tanpa mengubah gambar
        $query = "UPDATE apoteker SET nama='$nama', jabatan='$jabatan' WHERE id=$id";
    }

    $eksekusi = mysqli_query($db, $query);

    if ($eksekusi) {
        echo "<script> 
                alert('Data Berhasil diubah!');
                window.location='apoteker.php';
              </script>";
    } else {
        echo "<script> 
                alert('Data Gagal diubah!');
                window.location='editapoteker.php?id=$id';
              </script>";
    }
}

mysqli_close($db);
?>
