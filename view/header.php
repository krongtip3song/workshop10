
<?php
    /**
 * Created by PhpStorm.
 * User: Oak
 * Date: 7/2/2560
 * Time: 13:25
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Header</title>
</head>
<body>
<style>
    body{top:0; margin:0; padding:0;}
    a{text-decoration:none;
    color: white;}
</style>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a></li>
                <li><a href="../controller/check_login.php" id="logout" name="logout"><span class="glyphicon glyphicon-log-in"></span>  ออกจากระบบ</a></li>
            </ul>
        </div>
    </div>
</nav>
   <!-- <div style="color:red; background-color: cornflowerblue; height: 50px;">
        <div align="right" style="padding-top: 10px; padding-right: 20px;">
            <form name="logout" id="logout" action="../controller/check_login.php" method="post">
                <input class="btn" type="submit" id="logout" name="logout" value="ออกจากระบบ" >
            </form>
        </div>
    </div>-->

</body>
</html>
