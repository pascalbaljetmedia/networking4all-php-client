<?php

namespace Pbmedia\Networking4all;

class orderSSLCertificate
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestSSLOrder $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestSSLOrder $request
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
     * @return \Pbmedia\Networking4all\orderSSLCertificate
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestSSLOrder
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestSSLOrder $request
     * @return \Pbmedia\Networking4all\orderSSLCertificate
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
