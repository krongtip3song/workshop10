
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 6/2/2560
 * Time: 15:37
 */
spl_autoload_register(function ($class_name)
{
    require_once "../class/".$class_name.".class.php";
});
include ("../view/header.php");
include ("../controller/check_login.php");
include ("../controller/helper_func.inc.php");
include ("../controller/connection.inc.php");
include ("../model/db_user.inc.php");

$products = unserialize($_SESSION["productS"]);
$unit = $_POST['amount'];


for($i=0;$i<count($unit);$i++)
{
    if(isset($unit[$i]) && $unit[$i] != null)
    {
        $duct[$i] = array("0"=>$products[$i]->getPricePro(),"1"=>$unit[$i]);
    }

}

if(isset($duct)){
    $sell = calp($duct);
}else{
    $sell = null;
    echo "<script>alert('กรุณาเลือกสินค้า')</script>";
    echo "<script>window.location='products.php';</script>";
}

for ($i=0;$i<count($products);$i++)
{
    $duct2[$i] = array("0"=>$products[$i]->getNamePro(),"1"=>$unit[$i]);
}

?>
<center><h2>ใบเสร็จ</h2>
<?php
$proCart = new Cart($products,$unit);

createTable($products,$duct2,$sell);
?>
    <form action="products.php">
        <input class="btn btn-warning" type="submit" name="back" id="back" value="ย้อนกลับ"/>

    </form>
</center></br>
<?php
include ("../view/footer.php");
?>