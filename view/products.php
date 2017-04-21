<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<?php
include ("../view/header.php");
include ("../controller/check_login.php");
include ("../controller/connection.inc.php");

if (!isset($_SESSION["User"])){
    header('location:index.php');
    exit();
}
spl_autoload_register(function ($class_name)
{
    require_once "../class/".$class_name.".class.php";
});
?>
<body>

<div align="center">
    <h2>เลือกซื้อสินค้า</h2>
</div>
<div align="center">
    <form name="buy" action="calculate_cart.php" method="post">
        <?php
        $proList = new productList($conn);
        $productString = serialize($proList->getProducts());
        $_SESSION["productS"] = $productString;
        $pro = $proList->getProducts();
        ?>
        <table class="table table-hover" border='2' style="width: 60%" >
            <tr style="background-color: #ffff6b">
                <th>ลำดับ</th>
                <th>ชื่อสินค้า</th>
                <th>รหัสสินค้า</th>
                <th>ราคา</th>
                <th>จำนวน</th>
            </tr>
            <?php
            $j = 1;
        for ($i = 0;  $i < count($pro);$i++){
           echo" <tr>
                <td>".$j."</td>
                <td>".$pro[$i]->getNamePro()."</td>
                <td width='15%'>".$pro[$i]->getCodePro()."</td>
                <td>".$pro[$i]->getPricePro()."</td>
                <td width='10%'><input type='number' min='0' name='amount[]' id='amonut[]'></td>
            </tr>
            ";
            $j++;
        }
            ?>
        </table></p>

        <input class="btn btn-success" type="submit" name="buy" id="buy" value="ซื้อสินค้า"/>
    </form>
</div>
<?php

include ("../view/footer.php");
//show_source("products.php");
?>
</body>
</html>

