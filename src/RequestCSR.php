<?php

namespace Pbmedia\Networking4all;

class RequestCSR
{

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $csr
     */
    protected $csr = null;

    /**
     * @var string[] $san
     */
    protected $san = null;

    /**
     * @param string $productCode
     * @param string $csr
     */
    public function __construct($productCode, $csr)
    {
        $this->productCode = $productCode;
        $this->csr = $csr;
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
     * @return \Pbmedia\Networking4all\RequestCSR
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCsr()
    {
        return $this->csr;
    }

    /**
     * @param string $csr
     * @return \Pbmedia\Networking4all\RequestCSR
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSan()
    {
        return $this->san;
    }

    /**
     * @param string[] $san
     * @return \Pbmedia\Networking4all\RequestCSR
     */
    public function setSan(array $san = null)
    {
        $this->san = $san;
        return $this;
    }
}
