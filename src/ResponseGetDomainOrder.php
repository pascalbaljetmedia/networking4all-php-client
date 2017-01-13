<?php

namespace Pbmedia\Networking4all;

class ResponseGetDomainOrder
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var ResponseOrderStatus $status
     */
    protected $status = null;

    /**
     * @var string $serial
     */
    protected $serial = null;

    /**
     * @var string $refresh
     */
    protected $refresh = null;

    /**
     * @var string $retry
     */
    protected $retry = null;

    /**
     * @var string $expire
     */
    protected $expire = null;

    /**
     * @var string $ttl
     */
    protected $ttl = null;

    /**
     * @var string $hostmaster
     */
    protected $hostmaster = null;

    /**
     * @var string $regDate
     */
    protected $regDate = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $expDate
     */
    protected $expDate = null;

    /**
     * @var Nameserver[] $nameServers
     */
    protected $nameServers = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $contact
     */
    protected $contact = null;

    /**
     * @var string $adminContact
     */
    protected $adminContact = null;

    /**
     * @var string $techContact
     */
    protected $techContact = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @param string $traceNumber
     * @param string $domain
     * @param ResponseOrderStatus $status
     * @param string $serial
     * @param string $regDate
     * @param string $startDate
     * @param string $expDate
     * @param string $company
     * @param string $adminContact
     * @param string $techContact
     */
    public function __construct($traceNumber, $domain, $status, $serial, $regDate, $startDate, $expDate, $company, $adminContact, $techContact)
    {
        $this->traceNumber = $traceNumber;
        $this->domain = $domain;
        $this->status = $status;
        $this->serial = $serial;
        $this->regDate = $regDate;
        $this->startDate = $startDate;
        $this->expDate = $expDate;
        $this->company = $company;
        $this->adminContact = $adminContact;
        $this->techContact = $techContact;
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
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
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
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return ResponseOrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ResponseOrderStatus $status
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param string $serial
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * @param string $refresh
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setRefresh($refresh)
    {
        $this->refresh = $refresh;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * @param string $retry
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setRetry($retry)
    {
        $this->retry = $retry;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * @param string $expire
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
        return $this;
    }

    /**
     * @return string
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @param string $ttl
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostmaster()
    {
        return $this->hostmaster;
    }

    /**
     * @param string $hostmaster
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setHostmaster($hostmaster)
    {
        $this->hostmaster = $hostmaster;
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
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * @param string $expDate
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
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
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setNameServers(array $nameServers = null)
    {
        $this->nameServers = $nameServers;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminContact()
    {
        return $this->adminContact;
    }

    /**
     * @param string $adminContact
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setAdminContact($adminContact)
    {
        $this->adminContact = $adminContact;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechContact()
    {
        return $this->techContact;
    }

    /**
     * @param string $techContact
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setTechContact($techContact)
    {
        $this->techContact = $techContact;
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
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
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
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return \Pbmedia\Networking4all\ResponseGetDomainOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}
