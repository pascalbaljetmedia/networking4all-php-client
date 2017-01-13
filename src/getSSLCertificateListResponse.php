<?php

namespace Pbmedia\Networking4all;

class getSSLCertificateListResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseOrderList $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseOrderList $response
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
     * @return \Pbmedia\Networking4all\getSSLCertificateListResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseOrderList
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseOrderList $response
     * @return \Pbmedia\Networking4all\getSSLCertificateListResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
