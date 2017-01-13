<?php

namespace Pbmedia\Networking4all;

class orderSSLCertificateResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseSSLOrder $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseSSLOrder $response
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
     * @return \Pbmedia\Networking4all\orderSSLCertificateResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseSSLOrder
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseSSLOrder $response
     * @return \Pbmedia\Networking4all\orderSSLCertificateResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
