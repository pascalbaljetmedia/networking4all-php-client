<?php

namespace Pbmedia\Networking4all;

class cancelDomain
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestCancelDomain $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestCancelDomain $request
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
     * @return \Pbmedia\Networking4all\cancelDomain
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestCancelDomain
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestCancelDomain $request
     * @return \Pbmedia\Networking4all\cancelDomain
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
