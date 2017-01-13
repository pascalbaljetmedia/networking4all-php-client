<?php

namespace Pbmedia\Networking4all;

class Company
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $employees
     */
    protected $employees = null;

    /**
     * @var string $chamberOfCommerce
     */
    protected $chamberOfCommerce = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Pbmedia\Networking4all\Company
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @param string $employees
     * @return \Pbmedia\Networking4all\Company
     */
    public function setEmployees($employees)
    {
        $this->employees = $employees;
        return $this;
    }

    /**
     * @return string
     */
    public function getChamberOfCommerce()
    {
        return $this->chamberOfCommerce;
    }

    /**
     * @param string $chamberOfCommerce
     * @return \Pbmedia\Networking4all\Company
     */
    public function setChamberOfCommerce($chamberOfCommerce)
    {
        $this->chamberOfCommerce = $chamberOfCommerce;
        return $this;
    }
}
