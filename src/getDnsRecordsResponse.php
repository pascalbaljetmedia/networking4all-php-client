<?php

namespace Pbmedia\Networking4all;

class getDnsRecordsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseGetDnsRecords $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseGetDnsRecords $response
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
     * @return \Pbmedia\Networking4all\getDnsRecordsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseGetDnsRecords
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseGetDnsRecords $response
     * @return \Pbmedia\Networking4all\getDnsRecordsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
