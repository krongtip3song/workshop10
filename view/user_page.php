<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 27/2/2560
 * Time: 14:00
 */
include ("../view/header.php");
include ("../controller/connection.inc.php");
session_start();
$un = $_SESSION["username"];
$sql = "SELECT * FROM members WHERE username='$un'";
$res = $conn->query($sql);
$user = $res->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Header</title>
    <style>
        td{
            text-align: center;
        }
        th{
            background-color: #ffe9a8;
        }
    </style>
</head>
<body>
<div class="col-md-12 col-lg-12 col-sm-12" align="center">
    <h2>ข้อมูลส่วนตัว</h2>
</div>
<div class="container">
<?php


echo "</p><table border='2px'  class='table table-hover' align='center' style='width: 50%;'>";
echo "<tr><th>ไอดี</th><td>$user->username</td></tr>";
echo "<tr><th>รหัสผ่าน</th><td>$user->passwd</td></tr>";
echo "<tr><th>ชื่อ</th><td>$user->name</td></tr>";
echo "<tr><th>สกุล</th><td>$user->surname</td></tr>";
echo "<tr><th>สถานะ</th><td>$user->status</td></tr>";

echo "</table>";

include("../view/footer.php");
?>
</div>
</body>
</html>
