<?php

namespace Pbmedia\Networking4all;

class ResponseProduct
{

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $period
     */
    protected $period = null;

    /**
     * @var ResponseDescription $description
     */
    protected $description = null;

    /**
     * @var ProductFees $fees
     */
    protected $fees = null;

    /**
     * @var string $vat
     */
    protected $vat = null;

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @var string $total
     */
    protected $total = null;

    /**
     * @var ResponseProductDetails $details
     */
    protected $details = null;

    /**
     * @param string $productCode
     * @param string $name
     * @param string $period
     * @param ResponseDescription $description
     */
    public function __construct($productCode, $name, $period, $description)
    {
        $this->productCode = $productCode;
        $this->name = $name;
        $this->period = $period;
        $this->description = $description;
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
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
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
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return ResponseDescription
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param ResponseDescription $description
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return ProductFees
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param ProductFees $fees
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param string $vat
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return ResponseProductDetails
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param ResponseProductDetails $details
     * @return \Pbmedia\Networking4all\ResponseProduct
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }
}
