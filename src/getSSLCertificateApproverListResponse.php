<?php

namespace Pbmedia\Networking4all;

class getSSLCertificateApproverListResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseApproverList $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseApproverList $response
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
     * @return \Pbmedia\Networking4all\getSSLCertificateApproverListResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseApproverList
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseApproverList $response
     * @return \Pbmedia\Networking4all\getSSLCertificateApproverListResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
