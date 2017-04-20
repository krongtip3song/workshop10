<?php
spl_autoload_register(function ($class_name)
{
    require_once "/class/".$class_name.".class.php";
});
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 20/2/2560
 * Time: 13:59
 */
class productList{
    private $productsArr;
    public function __construct($conn)
    {
        $sql = "SELECT * FROM products ";
        $res = $conn->query($sql);
        if($res != null){
        $j = 0;
        while($pros = $res->fetch(PDO::FETCH_BOTH)) {
            $this->productsArr[$j] = new Product($pros["product_name"],$pros["product_code"],$pros["price"]);
            $j++;
        }
        }else{
            echo "Query data ERROR";
        }
    }
    public function getProducts()
    {
        return $this->productsArr;
    }


}
?>