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
        <title>Index</title>
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
                <div id="gadget-21" config_id="21" class="widgetUnit u-facebook/likebox">
                    <div class="unitHat"></div>
                    <div class="unitShirt">
                    <div style="text-align:center;">
                    <div class="fb-page fb_iframe_widget" data-href="http://www.facebook.com/zenshucomic" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-tabs="timeline" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=288916771134535&amp;container_width=220&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzenshucomic&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline"><span style="vertical-align: bottom; width: 220px; height: 500px;"><iframe name="f29b69347e0f45c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://web.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=288916771134535&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df158d3bb27524fc%26domain%3Dwww.zenshushop.com%26origin%3Dhttp%253A%252F%252Fwww.zenshushop.com%252Ff26ee0ae0fabd5%26relation%3Dparent.parent&amp;container_width=220&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzenshucomic&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline" style="border: none; visibility: visible; width: 220px; height: 500px;" class=""></iframe></span></div></div></div><div class="unitShoe"></div>
                </div>
            </div>
            <div class="col-6 bg-secondary">
                
                    <table id="nv">
                    <br>
                        <?php
                           while($row=mysqli_fetch_array($q)){
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