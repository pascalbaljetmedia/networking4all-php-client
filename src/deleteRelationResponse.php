<?php

namespace Pbmedia\Networking4all;

class deleteRelationResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseRelation $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseRelation $response
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
     * @return \Pbmedia\Networking4all\deleteRelationResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseRelation
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseRelation $response
     * @return \Pbmedia\Networking4all\deleteRelationResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
