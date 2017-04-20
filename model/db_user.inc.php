<?php
include ("../controller/connection.inc.php");

/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 6/3/2560
 * Time: 10:43
 */
function get_users(){
    global $conn;
    $users = array();
    $sql = "SELECT * FROM members ";
    $res = $conn->query($sql);
    while($user = $res->fetch(PDO::FETCH_ASSOC)){
        $users[] = array("member_id"=>$user['id_mem'],
                        "username"=>$user['username'],
                        "password"=>$user['passwd'],
                        "name"=>$user['name'],
                        "surname"=>$user['surname'],
                        "status"=>$user['status']);
    }
    return $users;
}
function get_user($user){
    global $conn;
    $user_once = array();
    $sql = "SELECT * FROM members WHERE username = '$user' ";
    $res = $conn->query($sql);
    while($user = $res->fetch(PDO::FETCH_ASSOC)){
        $user_once[] = array("member_id"=>$user['id_mem'],
            "username"=>$user['username'],
            "password"=>$user['passwd'],
            "name"=>$user['name'],
            "surname"=>$user['surname'],
            "status"=>$user['status']);
    }
    return $user_once;

}
function update_user($usern,$pass,$name,$surname,$usero)
{
    global $conn;
    $sql = "UPDATE members SET username='$usern',password='$pass',name='$name',surname='$surname' WHERE username='$usero'";
    $res=$conn->exec($sql);
    return $res;
}
function delete_user($user)
{
    global $conn;
    $sql = "DELETE FROM members WHERE username='$user'";
    $res=$conn->exec($sql);
    return $res;
}
?>