<?php

namespace Pbmedia\Networking4all;

class ResponseOrder
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var ResponseOrderStatus $status
     */
    protected $status = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var ResponseSan $sanNames
     */
    protected $sanNames = null;

    /**
     * @var string $certificateType
     */
    protected $certificateType = null;

    /**
     * @var string $commonName
     */
    protected $commonName = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $organization
     */
    protected $organization = null;

    /**
     * @var string $organizationUnit
     */
    protected $organizationUnit = null;

    /**
     * @var string $locality
     */
    protected $locality = null;

    /**
     * @var string $stateOrProvince
     */
    protected $stateOrProvince = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $pickupPassword
     */
    protected $pickupPassword = null;

    /**
     * @var ResponseProducts $products
     */
    protected $products = null;

    /**
     * @var string $period
     */
    protected $period = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $expDate
     */
    protected $expDate = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $paymentMethod
     */
    protected $paymentMethod = null;

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
     * @var ResponseFulfillment $fulfillment
     */
    protected $fulfillment = null;

    /**
     * @var ResponseExtraServicesResult $extraServices
     */
    protected $extraServices = null;

    /**
     * @param string $traceNumber
     * @param string $orderNumber
     * @param ResponseOrderStatus $status
     * @param string $domain
     * @param ResponseProducts $products
     * @param string $period
     * @param string $startDate
     * @param string $expDate
     * @param string $company
     * @param string $contact
     */
    public function __construct($traceNumber, $orderNumber, $status, $domain, $products, $period, $startDate, $expDate, $company, $contact)
    {
        $this->traceNumber = $traceNumber;
        $this->orderNumber = $orderNumber;
        $this->status = $status;
        $this->domain = $domain;
        $this->products = $products;
        $this->period = $period;
        $this->startDate = $startDate;
        $this->expDate = $expDate;
        $this->company = $company;
        $this->contact = $contact;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return ResponseSan
     */
    public function getSanNames()
    {
        return $this->sanNames;
    }

    /**
     * @param ResponseSan $sanNames
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setSanNames($sanNames)
    {
        $this->sanNames = $sanNames;
        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * @param string $certificateType
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setCertificateType($certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * @param string $commonName
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationUnit()
    {
        return $this->organizationUnit;
    }

    /**
     * @param string $organizationUnit
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setOrganizationUnit($organizationUnit)
    {
        $this->organizationUnit = $organizationUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * @param string $stateOrProvince
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupPassword()
    {
        return $this->pickupPassword;
    }

    /**
     * @param string $pickupPassword
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setPickupPassword($pickupPassword)
    {
        $this->pickupPassword = $pickupPassword;
        return $this;
    }

    /**
     * @return ResponseProducts
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ResponseProducts $products
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setProducts($products)
    {
        $this->products = $products;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setPeriod($period)
    {
        $this->period = $period;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
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
     * @return \Pbmedia\Networking4all\ResponseOrder
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
     * @return \Pbmedia\Networking4all\ResponseOrder
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
     * @return \Pbmedia\Networking4all\ResponseOrder
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
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setTechContact($techContact)
    {
        $this->techContact = $techContact;
        return $this;
    }

    /**
     * @return ResponseFulfillment
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param ResponseFulfillment $fulfillment
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }

    /**
     * @return ResponseExtraServicesResult
     */
    public function getExtraServices()
    {
        return $this->extraServices;
    }

    /**
     * @param ResponseExtraServicesResult $extraServices
     * @return \Pbmedia\Networking4all\ResponseOrder
     */
    public function setExtraServices($extraServices)
    {
        $this->extraServices = $extraServices;
        return $this;
    }
}
