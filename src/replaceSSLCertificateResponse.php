<?php

namespace Pbmedia\Networking4all;

class replaceSSLCertificateResponse
{

    /**
     * @var ResponseHeader $responseHeader
     */
    protected $responseHeader = null;

    /**
     * @var ResponseSSLReplace $response
     */
    protected $response = null;

    /**
     * @param ResponseHeader $responseHeader
     * @param ResponseSSLReplace $response
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
     * @return \Pbmedia\Networking4all\replaceSSLCertificateResponse
     */
    public function setResponseHeader($responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * @return ResponseSSLReplace
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseSSLReplace $response
     * @return \Pbmedia\Networking4all\replaceSSLCertificateResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
}
