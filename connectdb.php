<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'dbemp';

    $conn = mysqli_connect($servername, $username, $password, 
    $dbname);

    mysqli_set_charset($conn,"utf8");
?>