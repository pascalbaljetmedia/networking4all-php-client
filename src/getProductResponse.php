<?php

namespace Pbmedia\Networking4all;

class getProductResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseProduct $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseProduct $response
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
     * @return \Pbmedia\Networking4all\getProductResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseProduct
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseProduct $response
     * @return \Pbmedia\Networking4all\getProductResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
