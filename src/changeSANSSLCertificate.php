<?php

namespace Pbmedia\Networking4all;

class changeSANSSLCertificate
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestChangeSAN $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestChangeSAN $request
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
     * @return \Pbmedia\Networking4all\changeSANSSLCertificate
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestChangeSAN
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestChangeSAN $request
     * @return \Pbmedia\Networking4all\changeSANSSLCertificate
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
