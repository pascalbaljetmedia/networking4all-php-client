<?php

namespace Pbmedia\Networking4all;

class checkSSLCertificateCSRResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseCSR $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseCSR $response
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
     * @return \Pbmedia\Networking4all\checkSSLCertificateCSRResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseCSR
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseCSR $response
     * @return \Pbmedia\Networking4all\checkSSLCertificateCSRResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
