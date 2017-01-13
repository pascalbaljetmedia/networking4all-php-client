<?php

namespace Pbmedia\Networking4all;

class Address
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $street1
     */
    protected $street1 = null;

    /**
     * @var string $street2
     */
    protected $street2 = null;

    /**
     * @var string $street3
     */
    protected $street3 = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $streetNumber
     */
    protected $streetNumber = null;

    /**
     * @var string $streetNumberExtension
     */
    protected $streetNumberExtension = null;

    /**
     * @var string $buildingName
     */
    protected $buildingName = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $province
     */
    protected $province = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string $type
     * @param string $postalCode
     * @param string $city
     * @param string $province
     * @param string $countryCode
     */
    public function __construct($type, $postalCode, $city, $province, $countryCode)
    {
        $this->type = $type;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->province = $province;
        $this->countryCode = $countryCode;
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
     * @return \Pbmedia\Networking4all\Address
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     * @return \Pbmedia\Networking4all\Address
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     * @return \Pbmedia\Networking4all\Address
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet3()
    {
        return $this->street3;
    }

    /**
     * @param string $street3
     * @return \Pbmedia\Networking4all\Address
     */
    public function setStreet3($street3)
    {
        $this->street3 = $street3;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return \Pbmedia\Networking4all\Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return \Pbmedia\Networking4all\Address
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumberExtension()
    {
        return $this->streetNumberExtension;
    }

    /**
     * @param string $streetNumberExtension
     * @return \Pbmedia\Networking4all\Address
     */
    public function setStreetNumberExtension($streetNumberExtension)
    {
        $this->streetNumberExtension = $streetNumberExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * @param string $buildingName
     * @return \Pbmedia\Networking4all\Address
     */
    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \Pbmedia\Networking4all\Address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return \Pbmedia\Networking4all\Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return \Pbmedia\Networking4all\Address
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
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
     * @return \Pbmedia\Networking4all\Address
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
