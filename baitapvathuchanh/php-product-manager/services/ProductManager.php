<?php
namespace services;
class ProductManager
{
    private array $product;

    public function __construct()
    {
        $this->product = [];
    }

    public function add($product)
    {
        $this->product[] = $product;
    }

    public function getProducts():array
    {
        return  $this->product;
    }
}