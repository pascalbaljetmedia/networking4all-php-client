<?php

namespace Pbmedia\Networking4all;

class getDomain
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestGetDomainOrder $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestGetDomainOrder $request
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
     * @return \Pbmedia\Networking4all\getDomain
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestGetDomainOrder
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestGetDomainOrder $request
     * @return \Pbmedia\Networking4all\getDomain
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
