<?php

/**
 * Created by PhpStorm.
 * User: ibase
 * Date: 20/2/2560
 * Time: 14:32
 */
class Cart
{
    private $productInCart;
    public function __construct($proList,$productOrder)
    {
        for($i=0;$i<count($proList);$i++) {
            if ($productOrder != null && $productOrder != 0) {
                $this->productInCart[$i]["name"] = $proList[$i]->getNamePro();
                $this->productInCart[$i]["num"] = $productOrder[$i];
            }
        }
    }
    public function getProCart(){
        return $this->productInCart;

    }

}