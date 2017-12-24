<?php
    $dbcon = mysqli_connect('localhost', 'root', '', 'login');
    if(mysqli_connect_error()){
        echo "Error". mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($dbcon, 'utf8');
?>