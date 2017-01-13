<?php

namespace Pbmedia\Networking4all;

class replaceSSLCertificate
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestSSLReplace $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestSSLReplace $request
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
     * @return \Pbmedia\Networking4all\replaceSSLCertificate
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestSSLReplace
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestSSLReplace $request
     * @return \Pbmedia\Networking4all\replaceSSLCertificate
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
