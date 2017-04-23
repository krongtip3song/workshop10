<?php
/**
 * Created by PhpStorm.
 * User: Oak
 * Date: 23/4/2560
 * Time: 16:50
 */
include ("../controller/connection.inc.php");
$sql = "SELECT * FROM products ";
$res = $conn->query($sql);
    while($pros = $res->fetch(PDO::FETCH_BOTH)) {
        $productsArr[] = array($pros["product_name"],$pros["product_code"],$pros["price"]);

    }
echo json_encode($productsArr);