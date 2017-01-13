<?php

namespace Pbmedia\Networking4all;

class ResponseFulfillment
{

    /**
     * @var string $certificate
     */
    protected $certificate = null;

    /**
     * @var ResponseCACerts $caCertificates
     */
    protected $caCertificates = null;

    /**
     * @var string $sitesealCA
     */
    protected $sitesealCA = null;

    /**
     * @var string $sitesealCustom
     */
    protected $sitesealCustom = null;

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
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * @param string $certificate
     * @return \Pbmedia\Networking4all\ResponseFulfillment
     */
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
        return $this;
    }

    /**
     * @return ResponseCACerts
     */
    public function getCaCertificates()
    {
        return $this->caCertificates;
    }

    /**
     * @param ResponseCACerts $caCertificates
     * @return \Pbmedia\Networking4all\ResponseFulfillment
     */
    public function setCaCertificates($caCertificates)
    {
        $this->caCertificates = $caCertificates;
        return $this;
    }

    /**
     * @return string
     */
    public function getSitesealCA()
    {
        return $this->sitesealCA;
    }

    /**
     * @param string $sitesealCA
     * @return \Pbmedia\Networking4all\ResponseFulfillment
     */
    public function setSitesealCA($sitesealCA)
    {
        $this->sitesealCA = $sitesealCA;
        return $this;
    }

    /**
     * @return string
     */
    public function getSitesealCustom()
    {
        return $this->sitesealCustom;
    }

    /**
     * @param string $sitesealCustom
     * @return \Pbmedia\Networking4all\ResponseFulfillment
     */
    public function setSitesealCustom($sitesealCustom)
    {
        $this->sitesealCustom = $sitesealCustom;
        return $this;
    }
}
