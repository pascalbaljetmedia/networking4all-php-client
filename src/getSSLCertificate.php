<?php

namespace Pbmedia\Networking4all;

class getSSLCertificate
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestOrder $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestOrder $request
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
     * @return \Pbmedia\Networking4all\getSSLCertificate
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestOrder
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestOrder $request
     * @return \Pbmedia\Networking4all\getSSLCertificate
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
