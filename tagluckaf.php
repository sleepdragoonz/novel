<?php
  $con = mysqli_connect('localhost',"root",'','login');
  mysqli_set_charset($con,"utf8");
  $sql = "Select * from nv_zen_list";
  $sqll = "Select * from nv_luck_list";
  $q = mysqli_query($con,$sql);
  $qq = mysqli_query($con,$sqll);
?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{background:url("https://i.ytimg.com/vi/0HPgXuFgjNc/maxresdefault.jpg");background-repeat: no-repeat;
        background-size:100% 100%;
        }
        img{
            max-width:145px;max-height:210px;
        }
    </style>
    <title>Tag Zenshu</title>
</head>
<body>
    <!-- Top menu -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a class="navbar-brand" href="Indexaf.php">Novel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Indexaf.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Category Filter</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="tagzenshuaf.php">Zenshu</a>
                            <a class="dropdown-item" href="tagluckaf.php">Luckpim</a>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" style="position:absolute; right: 9%;"><?php echo "Welcome ".$s_login_username;?></a>
                    </li>
                    <li>
                    <a class="nav-link" href="index.php" style=" position:absolute; right: 3%;">singout</a>
                    </li>
                </ul>
               
            </nav>
        </div><br>
        <!-- Novel list -->
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-6 bg-secondary">
                
                    <table id="nv">
                    <br>
                        <?php
                           while($row=mysqli_fetch_array($qq)){
                            echo "<tr>";
                            echo "<td class='img'>";
                            echo "<img src='$row[nv_cover]'>";
                            echo "</td>";
                            echo "<td class='info'>";
                            echo "<a href='$row[nv_link]' style='color:black;'>";
                            echo "<p style='text-align:center'>$row[nv_name]</p>";
                            echo "<p style='text-align:center'>$row[nv_ch]</p>";
                            echo "</a>";
                            echo "</td>";
                            echo "</tr>";
                       }
                        ?>
                        </table>
            </div>
            <div class="col-3">
                
            </div>
        </div><br>
</body>
</html>