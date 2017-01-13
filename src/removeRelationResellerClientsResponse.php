<?php

namespace Pbmedia\Networking4all;

class removeRelationResellerClientsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseRelationClients $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseRelationClients $response
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
     * @return \Pbmedia\Networking4all\removeRelationResellerClientsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseRelationClients
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseRelationClients $response
     * @return \Pbmedia\Networking4all\removeRelationResellerClientsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
