<?php
include_once('IProduct.php');

class CitrusStore implements IProduct
{
    public function apples()
    {
        return "CitrusStore says: Apples are available. <br/>";
    }

    public function oranges()
    {
        return "CitrusStore says: We have citrus fruit. <br/>";
    }
}
