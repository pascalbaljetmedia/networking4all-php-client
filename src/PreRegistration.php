<?php

namespace Pbmedia\Networking4all;

class PreRegistration
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $trademarkName
     */
    protected $trademarkName = null;

    /**
     * @var string $trademarkNumber
     */
    protected $trademarkNumber = null;

    /**
     * @var string $trademarkCC
     */
    protected $trademarkCC = null;

    /**
     * @var string $trademarkClass
     */
    protected $trademarkClass = null;

    /**
     * @var string $domainName
     */
    protected $domainName = null;

    /**
     * @var string $appDate
     */
    protected $appDate = null;

    /**
     * @var string $regDate
     */
    protected $regDate = null;

    /**
     * @var string $entitlement
     */
    protected $entitlement = null;

    
    public function __construct()
    {
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
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrademarkName()
    {
        return $this->trademarkName;
    }

    /**
     * @param string $trademarkName
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setTrademarkName($trademarkName)
    {
        $this->trademarkName = $trademarkName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrademarkNumber()
    {
        return $this->trademarkNumber;
    }

    /**
     * @param string $trademarkNumber
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setTrademarkNumber($trademarkNumber)
    {
        $this->trademarkNumber = $trademarkNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrademarkCC()
    {
        return $this->trademarkCC;
    }

    /**
     * @param string $trademarkCC
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setTrademarkCC($trademarkCC)
    {
        $this->trademarkCC = $trademarkCC;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrademarkClass()
    {
        return $this->trademarkClass;
    }

    /**
     * @param string $trademarkClass
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setTrademarkClass($trademarkClass)
    {
        $this->trademarkClass = $trademarkClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppDate()
    {
        return $this->appDate;
    }

    /**
     * @param string $appDate
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setAppDate($appDate)
    {
        $this->appDate = $appDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * @param string $regDate
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * @param string $entitlement
     * @return \Pbmedia\Networking4all\PreRegistration
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
        return $this;
    }
}
