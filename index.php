<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 17/4/2560
 * Time: 15:05
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/npm.js"></script>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>

    <title>Shopping Mall Website</title>
    <?php
    session_start();

    if (isset($_GET["error"])){
        echo "<script type='text/javascript' >alert('ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณากรอกใหม่ค่ะ')</script>";
    }
    if (isset($_SESSION["member_info"])){
        header('location:products.php');
        exit();
    }
    ?>
</head>
<style>
    h3{
        font-family: "CS ChatThaiUI";
    }
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">Gamming Gear Shop</a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="../view/products.php">Products</a></li>
                <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">sd</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="col-sm-12 col-lg-12 col-md-12" align="center" style="margin-top: 15%">
    <h3>
        Sign In
    </h3>
</div>
<div class="col-sm-12 col-lg-12 col-md-12" align="center">
    <div class="col-sm-4 col-md-4 col-lg-4">

    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
    <form id="signIn" name="signIn" action="controller/check_login.php" method="post">
        <div class="input-group col-md-8">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" id="username" name="username" required/>
        </div></br>
        <div class="input-group col-md-8">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" id="password" name="password" required/>
        </div></br>
        <input class="btn btn-success" type="submit" id="login" name="login" value="เข้าสู่ระบบ" >
    </form>
   </div>
    <div class="col-sm-4 col-md-4 col-lg-4">

    </div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#username").keydown(function (e) {
            var id_chk = e['key'].charCodeAt(0);
            console.log(id_chk);
            if(id_chk < 48 || id_chk > 57){
                if(id_chk < 65 || id_chk > 90){
                    if(id_chk < 97 || id_chk > 122){
                        alert("กรอกได้เฉพาะตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้นครับ");
                        return false;
                    }
                }
            }
        });
        $("#password").keydown(function (e) {
            var pass_chk = e['key'].charCodeAt(0);
            console.log(pass_chk);
            if(pass_chk < 48 || pass_chk > 57){
                if(pass_chk < 65 || pass_chk > 90){
                    if(pass_chk < 97 || pass_chk > 122){
                        alert("กรอกได้เฉพาะตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้นครับ");
                        return false;
                    }
                }
            }
        });
    });
</script>
</body>
</html>
