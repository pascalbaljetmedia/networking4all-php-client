<?php

namespace Pbmedia\Networking4all;

class ResponseCACerts
{

    /**
     * @var ResponseCACert[] $caCertificate
     */
    protected $caCertificate = null;

    /**
     * @param ResponseCACert[] $caCertificate
     */
    public function __construct(array $caCertificate)
    {
        $this->caCertificate = $caCertificate;
    }

    /**
     * @return ResponseCACert[]
     */
    public function getCaCertificate()
    {
        return $this->caCertificate;
    }

    /**
     * @param ResponseCACert[] $caCertificate
     * @return \Pbmedia\Networking4all\ResponseCACerts
     */
    public function setCaCertificate(array $caCertificate)
    {
        $this->caCertificate = $caCertificate;
        return $this;
    }
}
