<?php
include_once('FruitStore.php');
include_once('CitrusStore.php');

class UseProduct
{
    public function __construct()
    {
        $fruitStore = new FruitStore();
        $citrusStore = new CitrusStore();
        $this->doInterface($fruitStore);
        $this->doInterface($citrusStore);
    }

    function doInterface(IProduct $iProduct)
    {
        echo $iProduct->apples();
        echo $iProduct->oranges();
    }
}

$worker = new UseProduct();
