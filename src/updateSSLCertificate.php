<?php

namespace Pbmedia\Networking4all;

class updateSSLCertificate
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestSSLUpdate $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestSSLUpdate $request
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
     * @return \Pbmedia\Networking4all\updateSSLCertificate
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestSSLUpdate
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestSSLUpdate $request
     * @return \Pbmedia\Networking4all\updateSSLCertificate
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
