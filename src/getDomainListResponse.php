<?php

namespace Pbmedia\Networking4all;

class getDomainListResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseDomainOrderList $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseDomainOrderList $response
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
     * @return \Pbmedia\Networking4all\getDomainListResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseDomainOrderList
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseDomainOrderList $response
     * @return \Pbmedia\Networking4all\getDomainListResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
