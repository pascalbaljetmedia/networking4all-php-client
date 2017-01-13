<?php

namespace Pbmedia\Networking4all;

class RequestApproverList
{

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @param string $productCode
     * @param string $domain
     */
    public function __construct($productCode, $domain)
    {
        $this->productCode = $productCode;
        $this->domain = $domain;
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
     * @return \Pbmedia\Networking4all\RequestApproverList
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return \Pbmedia\Networking4all\RequestApproverList
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
