<?php

namespace Pbmedia\Networking4all;

class ResponseCACert
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $certificate
     */
    protected $certificate = null;

    /**
     * @param string $certificate
     */
    public function __construct($certificate)
    {
        $this->certificate = $certificate;
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
     * @return \Pbmedia\Networking4all\ResponseCACert
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
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
     * @return \Pbmedia\Networking4all\ResponseCACert
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * @param string $certificate
     * @return \Pbmedia\Networking4all\ResponseCACert
     */
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
        return $this;
    }
}
