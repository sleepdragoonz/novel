<?php
    session_start();
    require 'connectdb.php';
    $session_login_id = $_SESSION['login_id'];
    $qry_user = "SELECT * FROM tb_login WHERE login_id='$session_login_id'";
    $result_user = mysqli_query($dbcon,$qry_user);
    if ($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $s_login_username = $row_user['login_username'];
        $s_login_email = $row_user['login_email'];
        mysqli_free_result($result_user);
    }
    mysqli_close($dbcon);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php
        echo "Welcome $s_login_username";
    ?>
    <hr>
    <a href="index.php">singout</a>
</body>
</html>