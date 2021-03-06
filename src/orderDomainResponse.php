<?php

namespace Pbmedia\Networking4all;

class orderDomainResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseDomainOrder $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseDomainOrder $response
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
     * @return \Pbmedia\Networking4all\orderDomainResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseDomainOrder
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseDomainOrder $response
     * @return \Pbmedia\Networking4all\orderDomainResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
