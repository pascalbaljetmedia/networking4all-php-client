<?php

namespace Pbmedia\Networking4all;

class getReceivedOrdersResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseOrders $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseOrders $response
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
     * @return \Pbmedia\Networking4all\getReceivedOrdersResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseOrders
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseOrders $response
     * @return \Pbmedia\Networking4all\getReceivedOrdersResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
