<?php

namespace Pbmedia\Networking4all;

class checkDomain
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestDomainCheck $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestDomainCheck $request
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
     * @return \Pbmedia\Networking4all\checkDomain
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestDomainCheck
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestDomainCheck $request
     * @return \Pbmedia\Networking4all\checkDomain
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
