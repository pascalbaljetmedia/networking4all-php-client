<?php

namespace Pbmedia\Networking4all;

class addDnsRecordsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseAddDnsRecords $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseAddDnsRecords $response
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
     * @return \Pbmedia\Networking4all\addDnsRecordsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseAddDnsRecords
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseAddDnsRecords $response
     * @return \Pbmedia\Networking4all\addDnsRecordsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
