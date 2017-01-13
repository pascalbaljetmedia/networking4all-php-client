<?php

namespace Pbmedia\Networking4all;

class ResponseRelationGet
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string $clientNumber
     */
    protected $clientNumber = null;

    /**
     * @var string $reseller
     */
    protected $reseller = null;

    /**
     * @var string $resellerHandle
     */
    protected $resellerHandle = null;

    /**
     * @var string[] $companyHandle
     */
    protected $companyHandle = null;

    /**
     * @var Company $company
     */
    protected $company = null;

    /**
     * @var Contact $contact
     */
    protected $contact = null;

    /**
     * @var Address[] $address
     */
    protected $address = null;

    /**
     * @var Telephone $phone
     */
    protected $phone = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var Telephone $fax
     */
    protected $fax = null;

    /**
     * @var string $faxNumber
     */
    protected $faxNumber = null;

    /**
     * @var Telephone $mobile
     */
    protected $mobile = null;

    /**
     * @var string $mobileNumber
     */
    protected $mobileNumber = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $website
     */
    protected $website = null;

    /**
     * @var Account $account
     */
    protected $account = null;

    /**
     * @var Financial $financial
     */
    protected $financial = null;

    /**
     * @var Audit $audit
     */
    protected $audit = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param string $type
     * @param string $handle
     * @param Address[] $address
     * @param string $email
     * @param Audit $audit
     * @param string $status
     */
    public function __construct($type, $handle, array $address, $email, $audit, $status)
    {
        $this->type = $type;
        $this->handle = $handle;
        $this->address = $address;
        $this->email = $email;
        $this->audit = $audit;
        $this->status = $status;
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
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }

    /**
     * @param string $clientNumber
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setClientNumber($clientNumber)
    {
        $this->clientNumber = $clientNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getReseller()
    {
        return $this->reseller;
    }

    /**
     * @param string $reseller
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setReseller($reseller)
    {
        $this->reseller = $reseller;
        return $this;
    }

    /**
     * @return string
     */
    public function getResellerHandle()
    {
        return $this->resellerHandle;
    }

    /**
     * @param string $resellerHandle
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setResellerHandle($resellerHandle)
    {
        $this->resellerHandle = $resellerHandle;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCompanyHandle()
    {
        return $this->companyHandle;
    }

    /**
     * @param string[] $companyHandle
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setCompanyHandle(array $companyHandle = null)
    {
        $this->companyHandle = $companyHandle;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Company $company
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address[] $address
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Telephone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param Telephone $phone
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return Telephone
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param Telephone $fax
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return Telephone
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param Telephone $mobile
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
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
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param Account $account
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return Financial
     */
    public function getFinancial()
    {
        return $this->financial;
    }

    /**
     * @param Financial $financial
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setFinancial($financial)
    {
        $this->financial = $financial;
        return $this;
    }

    /**
     * @return Audit
     */
    public function getAudit()
    {
        return $this->audit;
    }

    /**
     * @param Audit $audit
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setAudit($audit)
    {
        $this->audit = $audit;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Pbmedia\Networking4all\ResponseRelationGet
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
