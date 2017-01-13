<?php

namespace Pbmedia\Networking4all;

class getProduct
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestProduct $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestProduct $request
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
     * @return \Pbmedia\Networking4all\getProduct
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestProduct
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestProduct $request
     * @return \Pbmedia\Networking4all\getProduct
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
