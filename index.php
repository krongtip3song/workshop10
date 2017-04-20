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
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/npm.js"></script>

    <title>Shopping Mall Website</title>
    <?php
    session_start();

    if (isset($_GET["error"])){
        echo "<script type='text/javascript' >alert('ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณากรอกใหม่ค่ะ')</script>";
    }
    /*if (isset($_SESSION["member_info"])){
        header('location:checkout_cart.php');
        exit();
    }*/
    ?>
</head>
<style>
    h3{
        font-family: "CS ChatThaiUI";
    }
</style>
<body>
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

</body>
</html>
