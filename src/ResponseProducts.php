<?php

namespace Pbmedia\Networking4all;

class ResponseProducts
{

    /**
     * @var ResponseProduct[] $product
     */
    protected $product = null;

    /**
     * @var string $total
     */
    protected $total = null;

    /**
     * @param ResponseProduct[] $product
     */
    public function __construct(array $product)
    {
        $this->product = $product;
    }

    /**
     * @return ResponseProduct[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param ResponseProduct[] $product
     * @return \Pbmedia\Networking4all\ResponseProducts
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     * @return \Pbmedia\Networking4all\ResponseProducts
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}
