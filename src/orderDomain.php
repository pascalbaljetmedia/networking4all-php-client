<?php

namespace Pbmedia\Networking4all;

class orderDomain
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestDomainOrder $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestDomainOrder $request
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
     * @return \Pbmedia\Networking4all\orderDomain
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestDomainOrder
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestDomainOrder $request
     * @return \Pbmedia\Networking4all\orderDomain
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
