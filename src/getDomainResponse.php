<?php

namespace Pbmedia\Networking4all;

class getDomainResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseGetDomainOrder $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseGetDomainOrder $response
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
     * @return \Pbmedia\Networking4all\getDomainResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseGetDomainOrder
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseGetDomainOrder $response
     * @return \Pbmedia\Networking4all\getDomainResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
