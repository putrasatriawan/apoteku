<?php

include "be/koneksidatabase.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch the current value from the database
    $querySelect = "SELECT no_antrian FROM take_antrian WHERE id = 1";
    $resultSelect = mysqli_query($db, $querySelect);

    if ($row = mysqli_fetch_assoc($resultSelect)) {
        $currentNoAntrian = $row['no_antrian'];
        
        // Increment the value
        $newNoAntrian = $currentNoAntrian + 1;

        // Update the database with the new value
        $queryUpdate = "UPDATE take_antrian SET no_antrian = '$newNoAntrian' WHERE id = 1";

        if (mysqli_query($db, $queryUpdate)) {
            echo $newNoAntrian;  // Send the updated value back to the client
        } else {
            echo "Error updating database: " . mysqli_error($db);
        }
    } else {
        echo "Error fetching current value from database.";
    }
} else {
    echo "Invalid request method.";
}

mysqli_close($db);
?>
