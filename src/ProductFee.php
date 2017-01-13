<?php

namespace Pbmedia\Networking4all;

class ProductFee
{

    /**
     * @var string $period
     */
    protected $period = null;

    /**
     * @var string $retail
     */
    protected $retail = null;

    /**
     * @var string $actual
     */
    protected $actual = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @param string $period
     * @param string $retail
     * @param string $actual
     * @param string $type
     * @param string $currency
     */
    public function __construct($period, $retail, $actual, $type, $currency)
    {
        $this->period = $period;
        $this->retail = $retail;
        $this->actual = $actual;
        $this->type = $type;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     * @return \Pbmedia\Networking4all\ProductFee
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetail()
    {
        return $this->retail;
    }

    /**
     * @param string $retail
     * @return \Pbmedia\Networking4all\ProductFee
     */
    public function setRetail($retail)
    {
        $this->retail = $retail;
        return $this;
    }

    /**
     * @return string
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * @param string $actual
     * @return \Pbmedia\Networking4all\ProductFee
     */
    public function setActual($actual)
    {
        $this->actual = $actual;
        return $this;
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
     * @return \Pbmedia\Networking4all\ProductFee
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Pbmedia\Networking4all\ProductFee
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
