<?php

namespace Pbmedia\Networking4all;

class getRelationContactsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseRelationGetContact $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseRelationGetContact $response
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
     * @return \Pbmedia\Networking4all\getRelationContactsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseRelationGetContact
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseRelationGetContact $response
     * @return \Pbmedia\Networking4all\getRelationContactsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
