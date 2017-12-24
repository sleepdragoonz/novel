<?php
    $dbcon = mysqli_connect('localhost', 'root', '', 'login');
    if(mysqli_connect_error()){
        echo "Error". mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($dbcon, 'utf8');
    $login_username =  $_POST['Username'];
    $login_password =  $_POST['Password'];
    $sql = "Select * from tb_login where login_username='$login_username' and login_password='$login_password'";
    $result_user = mysqli_query($dbcon, $sql);

    if($result_user->num_rows == 1){
        session_start();
        $row_user = mysqli_fetch_array($result_user);
        
        $_SESSION['login_id'] = $row_user['login_id'];
     
        header("location:Indexaf.php");
    }else{
        echo "Error";
    }
?>