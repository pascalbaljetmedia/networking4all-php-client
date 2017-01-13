<?php

namespace Pbmedia\Networking4all;

class RequestGetProducts
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $brand
     */
    protected $brand = null;

    /**
     * @var string $sslType
     */
    protected $sslType = null;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \Pbmedia\Networking4all\RequestGetProducts
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return \Pbmedia\Networking4all\RequestGetProducts
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getSslType()
    {
        return $this->sslType;
    }

    /**
     * @param string $sslType
     * @return \Pbmedia\Networking4all\RequestGetProducts
     */
    public function setSslType($sslType)
    {
        $this->sslType = $sslType;
        return $this;
    }
}
