<?php

namespace Pbmedia\Networking4all;

class getSSLCertificateOrderList
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestOrderList $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestOrderList $request
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
     * @return \Pbmedia\Networking4all\getSSLCertificateOrderList
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestOrderList
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestOrderList $request
     * @return \Pbmedia\Networking4all\getSSLCertificateOrderList
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
