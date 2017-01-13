<?php

namespace Pbmedia\Networking4all;

class ResponseGetProducts
{

    /**
     * @var Products $products
     */
    protected $products = null;

    /**
     * @param Products $products
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * @return Products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Products $products
     * @return \Pbmedia\Networking4all\ResponseGetProducts
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }
}
