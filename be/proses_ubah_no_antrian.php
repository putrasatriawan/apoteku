<?php

include "koneksidatabase.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noAntrian = $_POST['no_antrian'];

    $query = "UPDATE tb_no_antrian SET no_antrian = '$noAntrian' WHERE id = 1";

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