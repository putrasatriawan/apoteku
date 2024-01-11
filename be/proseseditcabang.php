<?php
include "koneksidatabase.php";

// Periksa apakah formulir telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; // Anggap Anda memiliki ID untuk data yang ingin diedit

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $no_hp = $_POST['no_hp'];
    $pelayanan = $_POST['pelayanan'];

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


    // Perbarui data dengan gambar dan ikon baru
    $query = "UPDATE cabang_tb SET nama='$nama',alamat='$alamat', deskripsi='$deskripsi', no_hp='$no_hp',pelayanan='$pelayanan',gambar='$gambar_path' WHERE id=$id";

    $eksekusi = mysqli_query($db, $query);

    if ($eksekusi) {
        echo "<script> 
                alert('Data Berhasil diubah!');
                window.location='cabang.php';
              </script>";
    } else {
        echo "<script> 
                alert('Data Gagal diubah!');
                window.location='editcabang.php?id=$id';
              </script>";
    }
}

mysqli_close($db);
?>
