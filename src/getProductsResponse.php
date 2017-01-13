<?php

namespace Pbmedia\Networking4all;

class getProductsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseGetProducts $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseGetProducts $response
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
     * @return \Pbmedia\Networking4all\getProductsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseGetProducts
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseGetProducts $response
     * @return \Pbmedia\Networking4all\getProductsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
