<?php

namespace Pbmedia\Networking4all;

class getSSLCertificateOrderResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseOrder $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseOrder $response
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
     * @return \Pbmedia\Networking4all\getSSLCertificateOrderResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseOrder
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseOrder $response
     * @return \Pbmedia\Networking4all\getSSLCertificateOrderResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
