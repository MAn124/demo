<?php 

    $sv = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'demoproject';

    $conn = new mysqli($sv, $user, $pass, $database);

    if($conn) {
        mysqli_query($conn, 'SET NAMES "utf8"');
       
    }
    else {
        echo "Failed";
    }
?>