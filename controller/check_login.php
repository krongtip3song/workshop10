<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 6/2/2560
 * Time: 15:44
 */

session_start();
include ('connection.inc.php');
function check($username){
    $split_id = str_split($username);
    $check_id = true;
    for ($i=0;$i<count($split_id);$i++){
        $ascii = ord($split_id[$i]);
        if ($ascii>=48 && $ascii<=57 || $ascii>=65 && $ascii<= 90 || $ascii>=97 && $ascii<=122){
            $check_id = true;
        }else{
            return false;
        }
    }
    return $check_id;
}
function login($username_chk,$passwd_chk,$conn){
    $sql = "SELECT * FROM members WHERE username='$username_chk' and passwd='$passwd_chk'";
    $res = $conn->query($sql);
    if($user = $res->fetch(PDO::FETCH_OBJ)){
        $_SESSION["member_info"] = true;
        $_SESSION["username"] = $username_chk;
        $_SESSION["password"] = $passwd_chk;
        if ($user -> status == "Admin") {
            $_SESSION["Admin"] = true;
            header('location:../view/admin_page.php');
            exit();
        }else{
            //header('location:member_info.php');
            $_SESSION["User"] = true;
            header('location:../view/products.php');
            exit();
        }
    }else{
        echo "<script>error();</script>";
        echo "<script>window.location='../index.php'</script>";
        //header('location:index.php');
        exit();
    }
}
if (isset($_POST["login"])){
    if (check($_POST["username"])){
        echo "<script>alert('กรุณากรอกข้อมูลใหม่')</script>";
        echo "<script>window.location='../index.php';</script>";
    }

    login($_POST["username"],$_POST["password"],$conn);
}
if(isset($_GET["logout"])){
    session_unset();
    session_destroy();
    if (ini_get("session.use_cookies")) {
    setcookie(session_name(),'',time() - 3600,"/");
    }
        echo "Session deleted";
        header('location:../index.php');
        exit();
}
if (!isset($_SESSION["member_info"])){
    header('location: ../index.php');
    exit();
}


?>


