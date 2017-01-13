<?php

namespace Pbmedia\Networking4all;

class ResponseDomainOrder
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @param string $domain
     */
    public function __construct($domain)
    {
        $this->domain = $domain;
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
     * @return \Pbmedia\Networking4all\ResponseDomainOrder
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }

    /**
     * @param string $traceNumber
     * @return \Pbmedia\Networking4all\ResponseDomainOrder
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \Pbmedia\Networking4all\ResponseDomainOrder
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
}
