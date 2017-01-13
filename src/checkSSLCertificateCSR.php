<?php

namespace Pbmedia\Networking4all;

class checkSSLCertificateCSR
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestCSR $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestCSR $request
     */
    public function __construct($requestHeader, $request)
    {
        $this->requestHeader = $requestHeader;
        $this->request = $request;
    }

    /**
     * @return RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * @param RequestHeader $requestHeader
     * @return \Pbmedia\Networking4all\checkSSLCertificateCSR
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestCSR
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestCSR $request
     * @return \Pbmedia\Networking4all\checkSSLCertificateCSR
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
