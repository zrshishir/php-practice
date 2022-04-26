<?php
include_once('IProduct.php');

class FruitStore implements IProduct
{
    public function apples()
    {
        return 'FruitStore says-Apples are available. <br/>';
    }

    public function oranges()
    {
        return 'FruitStore says Oranges are available. <br/>';
    }
}