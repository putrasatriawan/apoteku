<?php
include "koneksidatabase.php";

// Periksa apakah formulir telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; // Anggap Anda memiliki ID untuk data yang ingin diedit

    $nama_k = $_POST['nama_k'];
    $deskripsi = $_POST['deskripsi'];

    // Periksa apakah gambar baru diunggah
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

    // Periksa apakah ikon baru diunggah
    if ($_FILES['icon']['size'] > 0) {
        $icon = $_FILES['icon']['name'];
        $icon_tmp = $_FILES['icon']['tmp_name'];

        $icon_path = $upload_dir . $icon;

        move_uploaded_file($icon_tmp, $icon_path);
    } else {
        // Jika tidak ada ikon baru, gunakan ikon yang sudah ada di database
        $icon_path = $_POST['icon_path'];
    }

    // Perbarui data dengan gambar dan ikon baru
    $query = "UPDATE tb_kategori SET nama_k='$nama_k', deskripsi='$deskripsi', gambar='$gambar_path', icon='$icon_path' WHERE id=$id";

    $eksekusi = mysqli_query($db, $query);

    if ($eksekusi) {
        echo "<script> 
                alert('Data Berhasil diubah!');
                window.location='kategori.php';
              </script>";
    } else {
        echo "<script> 
                alert('Data Gagal diubah!');
                window.location='editkategori.php?id=$id';
              </script>";
    }
}

mysqli_close($db);
?>
