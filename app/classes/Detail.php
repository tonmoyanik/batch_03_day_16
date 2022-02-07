<?php
namespace App\classes;
require_once 'vendor/autoload.php';
use App\classes\Product;
//use App\classes\Detail;

class Detail extends Product
{
    public function getDetail ($key='')
    {
        return array_filter($this->data, function ($product) use ($key)
        {
            if ($product['id'] === $key)
            {
                return $product;
            }
        }
        );
    }
}