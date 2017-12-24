<?php
    require 'connectdb.php';
    $login_username = $_POST['Username'];
    $login_password = $_POST['Password'];
    $login_email = $_POST['Email'];
    
    
    $query = "INSERT INTO tb_login (login_username, login_password, login_email) VALUES ('$login_username', '$login_password', '$login_email')";
    $result = mysqli_query($dbcon, $query);

    if ($result){
        // header('Location:Loginpage.php');
    }else{
        echo "Error". mysqli_error($dbcon);
    }
?>