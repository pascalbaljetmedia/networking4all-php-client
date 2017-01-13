<?php

namespace Pbmedia\Networking4all;

class changeSANSSLCertificateResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseChangeSAN $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseChangeSAN $response
     */
    public function __construct($responseHeader, $response)
    {
        $this->responseHeader = $responseHeader;
        $this->response = $response;
    }

    /**
     * @return ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * @param ResponseHeader $responseHeader
     * @return \Pbmedia\Networking4all\changeSANSSLCertificateResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseChangeSAN
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseChangeSAN $response
     * @return \Pbmedia\Networking4all\changeSANSSLCertificateResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
