<?php

include "koneksidatabase.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noAntrian = $_POST['no_antrian_resep'];

    $query = "UPDATE tb_antrian_resep SET no_antrian_resep = '$noAntrian' WHERE id = 1";

    if (mysqli_query($db, $query)) {
        echo "Data nomor antrian berhasil diperbarui.";
    } else {
        echo "Error: " . mysqli_error($db);
    }
} else {
    echo "Metode request tidak valid.";
}

mysqli_close($db);
?>