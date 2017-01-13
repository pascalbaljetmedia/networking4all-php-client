<?php

namespace Pbmedia\Networking4all;

class RequestSSLOrder
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
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $period
     */
    protected $period = null;

    /**
     * @var string $orderKind
     */
    protected $orderKind = null;

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $csr
     */
    protected $csr = null;

    /**
     * @var string $licences
     */
    protected $licences = null;

    /**
     * @var string $approverEmail
     */
    protected $approverEmail = null;

    /**
     * @var string[] $san
     */
    protected $san = null;

    /**
     * @var string $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

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
     * @var string $extraPreferences
     */
    protected $extraPreferences = null;

    /**
     * @var RequestSSLOrderOptions $option
     */
    protected $option = null;

    /**
     * @param string $companyHandle
     * @param string $adminHandle
     * @param string $techHandle
     * @param string $productCode
     * @param string $period
     */
    public function __construct($companyHandle, $adminHandle, $techHandle, $productCode, $period)
    {
        $this->companyHandle = $companyHandle;
        $this->adminHandle = $adminHandle;
        $this->techHandle = $techHandle;
        $this->productCode = $productCode;
        $this->period = $period;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setTechHandle($techHandle)
    {
        $this->techHandle = $techHandle;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderKind()
    {
        return $this->orderKind;
    }

    /**
     * @param string $orderKind
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setOrderKind($orderKind)
    {
        $this->orderKind = $orderKind;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicences()
    {
        return $this->licences;
    }

    /**
     * @param string $licences
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setLicences($licences)
    {
        $this->licences = $licences;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail()
    {
        return $this->approverEmail;
    }

    /**
     * @param string $approverEmail
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setApproverEmail($approverEmail)
    {
        $this->approverEmail = $approverEmail;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setSan(array $san = null)
    {
        $this->san = $san;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
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
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraPreferences()
    {
        return $this->extraPreferences;
    }

    /**
     * @param string $extraPreferences
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setExtraPreferences($extraPreferences)
    {
        $this->extraPreferences = $extraPreferences;
        return $this;
    }

    /**
     * @return RequestSSLOrderOptions
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param RequestSSLOrderOptions $option
     * @return \Pbmedia\Networking4all\RequestSSLOrder
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }
}
