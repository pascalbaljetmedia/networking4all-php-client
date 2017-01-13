<?php

namespace Pbmedia\Networking4all;

class updateDnsRecordsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseUpdateDnsRecords $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseUpdateDnsRecords $response
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
     * @return \Pbmedia\Networking4all\updateDnsRecordsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseUpdateDnsRecords
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseUpdateDnsRecords $response
     * @return \Pbmedia\Networking4all\updateDnsRecordsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
