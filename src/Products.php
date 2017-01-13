<?php

namespace Pbmedia\Networking4all;

class Products
{

    /**
     * @var Product[] $product
     */
    protected $product = null;

    
    public function __construct()
    {
    }

    /**
     * @return Product[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product[] $product
     * @return \Pbmedia\Networking4all\Products
     */
    public function setProduct(array $product = null)
    {
        $this->product = $product;
        return $this;
    }
}
