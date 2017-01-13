<?php

namespace Pbmedia\Networking4all;

class nameServerChangeResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseNameServerChange $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseNameServerChange $response
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
     * @return \Pbmedia\Networking4all\nameServerChangeResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseNameServerChange
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseNameServerChange $response
     * @return \Pbmedia\Networking4all\nameServerChangeResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
