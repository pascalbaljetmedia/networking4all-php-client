<?php

namespace Pbmedia\Networking4all;

class checkDomainResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseDomainCheck $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseDomainCheck $response
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
     * @return \Pbmedia\Networking4all\checkDomainResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseDomainCheck
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseDomainCheck $response
     * @return \Pbmedia\Networking4all\checkDomainResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
