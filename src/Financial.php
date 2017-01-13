<?php

namespace Pbmedia\Networking4all;

class Financial
{

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var string $bicCode
     */
    protected $bicCode = null;

    /**
     * @var string $ibanNumber
     */
    protected $ibanNumber = null;

    /**
     * @var string $vatin
     */
    protected $vatin = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Pbmedia\Networking4all\Financial
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return \Pbmedia\Networking4all\Financial
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBicCode()
    {
        return $this->bicCode;
    }

    /**
     * @param string $bicCode
     * @return \Pbmedia\Networking4all\Financial
     */
    public function setBicCode($bicCode)
    {
        $this->bicCode = $bicCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getIbanNumber()
    {
        return $this->ibanNumber;
    }

    /**
     * @param string $ibanNumber
     * @return \Pbmedia\Networking4all\Financial
     */
    public function setIbanNumber($ibanNumber)
    {
        $this->ibanNumber = $ibanNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatin()
    {
        return $this->vatin;
    }

    /**
     * @param string $vatin
     * @return \Pbmedia\Networking4all\Financial
     */
    public function setVatin($vatin)
    {
        $this->vatin = $vatin;
        return $this;
    }
}
