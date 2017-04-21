<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 27/2/2560
 * Time: 13:59
 */
include ("../model/db_user.inc.php");
include("../controller/connection.inc.php");
include ("../view/header.php");
session_start();
if (!isset($_SESSION["Admin"])) {
    header('location:index.php');
    exit();
}
if (isset($_GET["error"])){
    echo "<script type='text/javascript' >alert('username ซ้ำจ้า')</script>";}
if(isset($_POST['delete'])){
    delete_user($_POST['delete2']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Admin Management</title>
</head>
<body>
<div class="container" align="center">
<h2>สมาชิกทั้งหมด</h2></br></br>

<table border='2px' align='center' class="table table-hover" style="width: 70%">
<tr style="background-color: lightskyblue"><th>ลำดับ</th>
    <th>ชื่อผู้ใช้</th>
    <th>รหัสผ่านา</th>
    <th>ชื่อ</th>
    <th>สกุล</th>
    <th>แก้ไข</th></tr>
<?php
$users = get_users();
$i=0;
while($i<count($users)) {
    $no = $i+1;
    echo "<tr><td>$no</td><td>{$users[$i]['username']}</td><td>{$users[$i]['password']}</td><td>{$users[$i]['name']}
            </td><td>{$users[$i]['surname']}</td>";
    echo "<td style='text-align: center;'>
           <div class='col-sm-2'> 
            <form action='#' method='post'>
                   <input type='submit' class='btn btn-danger' name='delete' value='ลบ'/>
                   <input type='hidden' name='delete2' value='".$users[$i]['username']."'/>   
            </form>
            </div>
            <div class='col-sm-2'> 
            <form action='../view/admin_page.php' method='post'>
                    <input type='submit' class='btn btn-warning' name='edit' value='แก้ไข'/>
                    <input type='hidden' name='edit2' value='".$users[$i]['username']."'/>
            </form>
            </div>
           </td>
           </tr>";
    $i++;
}


?>

</table>
</div>
</body>
</html>
<?php include ("../view/footer.php");?>