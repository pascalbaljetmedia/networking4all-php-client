<?php

namespace Pbmedia\Networking4all;

class RequestProduct
{

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @param string $productCode
     */
    public function __construct($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \Pbmedia\Networking4all\RequestProduct
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }
}
