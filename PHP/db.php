<?php

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'subidapractica'
    );

    if ($conn) {
        echo 'DB is connected';
    }
?>
