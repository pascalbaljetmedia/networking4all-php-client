<?php

namespace Pbmedia\Networking4all;

class removeRelationContactsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseRelationContacts $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseRelationContacts $response
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
     * @return \Pbmedia\Networking4all\removeRelationContactsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseRelationContacts
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseRelationContacts $response
     * @return \Pbmedia\Networking4all\removeRelationContactsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
