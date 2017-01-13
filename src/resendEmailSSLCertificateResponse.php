<?php

namespace Pbmedia\Networking4all;

class resendEmailSSLCertificateResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseResendEmail $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseResendEmail $response
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
     * @return \Pbmedia\Networking4all\resendEmailSSLCertificateResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseResendEmail
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseResendEmail $response
     * @return \Pbmedia\Networking4all\resendEmailSSLCertificateResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
