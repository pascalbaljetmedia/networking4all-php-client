<?php

namespace Pbmedia\Networking4all;

class getRelationResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseRelationGet $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseRelationGet $response
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
     * @return \Pbmedia\Networking4all\getRelationResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseRelationGet
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseRelationGet $response
     * @return \Pbmedia\Networking4all\getRelationResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
