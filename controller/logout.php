<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 21/4/2560
 * Time: 15:32
 */
?>
<?php
include ('connection.inc.php');
session_start();
session_unset();
session_destroy();
if (ini_get("session.use_cookies")) {
    setcookie(session_name(),'',time() - 3600,"/");
}
    echo "Session deleted";
    header('location:../index.php');
    exit();
if (!isset($_SESSION["member_info"])){
    header('location: ../index.php');
    exit();
}
?>