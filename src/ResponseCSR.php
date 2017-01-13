<?php

namespace Pbmedia\Networking4all;

class ResponseCSR
{

    /**
     * @var string $organisation
     */
    protected $organisation = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $province
     */
    protected $province = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $cn
     */
    protected $cn = null;

    /**
     * @var string $csr
     */
    protected $csr = null;

    /**
     * @var string[] $san
     */
    protected $san = null;

    /**
     * @param string $organisation
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string $email
     * @param string $cn
     */
    public function __construct($organisation, $city, $province, $country, $email, $cn)
    {
        $this->organisation = $organisation;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->email = $email;
        $this->cn = $cn;
    }

    /**
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * @param string $organisation
     * @return \Pbmedia\Networking4all\ResponseCSR
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
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
     * @return \Pbmedia\Networking4all\ResponseCSR
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
     * @return \Pbmedia\Networking4all\ResponseCSR
     */
    public function setProvince($province)
    {
        $this->province = $province;
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
     * @return \Pbmedia\Networking4all\ResponseCSR
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
     * @return \Pbmedia\Networking4all\ResponseCSR
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getCn()
    {
        return $this->cn;
    }

    /**
     * @param string $cn
     * @return \Pbmedia\Networking4all\ResponseCSR
     */
    public function setCn($cn)
    {
        $this->cn = $cn;
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
     * @return \Pbmedia\Networking4all\ResponseCSR
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
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
     * @return \Pbmedia\Networking4all\ResponseCSR
     */
    public function setSan(array $san = null)
    {
        $this->san = $san;
        return $this;
    }
}
