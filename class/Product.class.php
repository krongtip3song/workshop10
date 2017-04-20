<?php
/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 10/2/2560
 * Time: 11:37
 */

class Product{
    private $name_pro;
    private $code_pro;
    private $price_pro;

    public function __construct($name,$code,$price){
        $this->name_pro = $name;
        $this->code_pro = $code;
        $this->price_pro = $price;
    }

    public function getNamePro()
    {
        return $this->name_pro;
    }

    public function setNamePro($name){
        $this->name_pro = $name;
    }

    public function getCodePro()
    {
        return $this->code_pro;
    }

    public function setCodePro($code){
        $this->code_pro = $code;
    }

    public function getPricePro()
    {
        return $this->price_pro;
    }

    public function setPricePro($price){
        $this->price_pro = $price;
    }
}

?>

