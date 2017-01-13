<?php

namespace Pbmedia\Networking4all;

class getSSLCertificateList
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
     * @return \Pbmedia\Networking4all\getSSLCertificateList
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
     * @return \Pbmedia\Networking4all\getSSLCertificateList
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
