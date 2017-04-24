<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <script>
        function loadProduct() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() { setName(xhr); };
            var url = "http://localhost/webapp/workshop10/model/db_product.inc.php";
            xhr.open("POST",url,true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send();
        }
        function setName(xhr) {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var r = xhr.responseText;

                if (r.indexOf("ERRNO") >= 0 || r.indexOf("error:") >= 0
                    || r.length == 0)
                    throw (r.length == 0 ? "Server error." : r);
                var product = JSON.parse(r);
                var table = document.getElementById("table_product");
                for(var i=0;i<product.length;i++){
                    var count = i+1;
                    var tr = document.createElement("tr");
                    var td1 = document.createElement("td");
                    td1.innerHTML= count;
                    tr.appendChild(td1);
                    var td2 = document.createElement("td");
                    td2.innerHTML= product[i][0];
                    tr.appendChild(td2);
                    var td3 = document.createElement("td");
                    td3.innerHTML= product[i][1];
                    tr.appendChild(td3);
                    var td4 = document.createElement("td");
                    td4.innerHTML= product[i][2];
                    tr.appendChild(td4);
                    var td5 = document.createElement("td");
                    td5.innerHTML= "<input name='amount[]' type='number' id='amount'/>";
                    tr.appendChild(td5);
                    table.appendChild(tr);
                }
            }
        }

    </script>
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
<body onload="loadProduct()">

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
        <table class="table table-hover" border='2' style="width: 60%" id="table_product">
            <tr style="background-color: #ffff6b">
                <th>ลำดับ</th>
                <th>ชื่อสินค้า</th>
                <th>รหัสสินค้า</th>
                <th>ราคา</th>
                <th>จำนวน</th>
            </tr>
        </table></p>

        <input class="btn btn-success" type="submit" name="buy" id="buy" value="ซื้อสินค้า"/>
    </form>
</div>
<?php
include ("../view/footer.php");
show_source("products.php");
echo "*******************************************************************<br/>";
show_source("../model/db_product.inc.php");
?>
</body>
</html>

