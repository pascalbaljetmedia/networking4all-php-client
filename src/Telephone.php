<?php

namespace Pbmedia\Networking4all;

class Telephone
{

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $trunkCode
     */
    protected $trunkCode = null;

    /**
     * @var string $subscriberNumber
     */
    protected $subscriberNumber = null;

    /**
     * @var string $extension
     */
    protected $extension = null;

    /**
     * @param string $countryCode
     * @param string $trunkCode
     * @param string $subscriberNumber
     */
    public function __construct($countryCode, $trunkCode, $subscriberNumber)
    {
        $this->countryCode = $countryCode;
        $this->trunkCode = $trunkCode;
        $this->subscriberNumber = $subscriberNumber;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Pbmedia\Networking4all\Telephone
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrunkCode()
    {
        return $this->trunkCode;
    }

    /**
     * @param string $trunkCode
     * @return \Pbmedia\Networking4all\Telephone
     */
    public function setTrunkCode($trunkCode)
    {
        $this->trunkCode = $trunkCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriberNumber()
    {
        return $this->subscriberNumber;
    }

    /**
     * @param string $subscriberNumber
     * @return \Pbmedia\Networking4all\Telephone
     */
    public function setSubscriberNumber($subscriberNumber)
    {
        $this->subscriberNumber = $subscriberNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     * @return \Pbmedia\Networking4all\Telephone
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }
}
