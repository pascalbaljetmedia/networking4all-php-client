<?php

namespace Pbmedia\Networking4all;

class deleteDnsRecordsResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseDeleteDnsRecords $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseDeleteDnsRecords $response
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
     * @return \Pbmedia\Networking4all\deleteDnsRecordsResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseDeleteDnsRecords
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseDeleteDnsRecords $response
     * @return \Pbmedia\Networking4all\deleteDnsRecordsResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
