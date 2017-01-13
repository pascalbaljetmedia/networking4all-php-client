<?php

namespace Pbmedia\Networking4all;

class RequestDomainOrder
{

    /**
     * @var string $companyHandle
     */
    protected $companyHandle = null;

    /**
     * @var string $adminHandle
     */
    protected $adminHandle = null;

    /**
     * @var string $techHandle
     */
    protected $techHandle = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var Nameserver[] $nameServers
     */
    protected $nameServers = null;

    /**
     * @var string $idnLanguage
     */
    protected $idnLanguage = null;

    /**
     * @var PreRegistration $preRegistration
     */
    protected $preRegistration = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @param string $companyHandle
     * @param string $adminHandle
     * @param string $techHandle
     * @param string $action
     * @param string $domain
     */
    public function __construct($companyHandle, $adminHandle, $techHandle, $action, $domain)
    {
        $this->companyHandle = $companyHandle;
        $this->adminHandle = $adminHandle;
        $this->techHandle = $techHandle;
        $this->action = $action;
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getCompanyHandle()
    {
        return $this->companyHandle;
    }

    /**
     * @param string $companyHandle
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setCompanyHandle($companyHandle)
    {
        $this->companyHandle = $companyHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminHandle()
    {
        return $this->adminHandle;
    }

    /**
     * @param string $adminHandle
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setAdminHandle($adminHandle)
    {
        $this->adminHandle = $adminHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechHandle()
    {
        return $this->techHandle;
    }

    /**
     * @param string $techHandle
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setTechHandle($techHandle)
    {
        $this->techHandle = $techHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setAction($action)
    {
        $this->action = $action;
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
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
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
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return Nameserver[]
     */
    public function getNameServers()
    {
        return $this->nameServers;
    }

    /**
     * @param Nameserver[] $nameServers
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setNameServers(array $nameServers = null)
    {
        $this->nameServers = $nameServers;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdnLanguage()
    {
        return $this->idnLanguage;
    }

    /**
     * @param string $idnLanguage
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setIdnLanguage($idnLanguage)
    {
        $this->idnLanguage = $idnLanguage;
        return $this;
    }

    /**
     * @return PreRegistration
     */
    public function getPreRegistration()
    {
        return $this->preRegistration;
    }

    /**
     * @param PreRegistration $preRegistration
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setPreRegistration($preRegistration)
    {
        $this->preRegistration = $preRegistration;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return \Pbmedia\Networking4all\RequestDomainOrder
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }
}
