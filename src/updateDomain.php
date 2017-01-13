<?php

namespace Pbmedia\Networking4all;

class updateDomain
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestUpdateDomain $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestUpdateDomain $request
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
     * @return \Pbmedia\Networking4all\updateDomain
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestUpdateDomain
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestUpdateDomain $request
     * @return \Pbmedia\Networking4all\updateDomain
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
