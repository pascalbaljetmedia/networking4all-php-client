<?php

namespace Pbmedia\Networking4all;

class cancelDomainResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseCancelDomain $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseCancelDomain $response
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
     * @return \Pbmedia\Networking4all\cancelDomainResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseCancelDomain
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseCancelDomain $response
     * @return \Pbmedia\Networking4all\cancelDomainResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
