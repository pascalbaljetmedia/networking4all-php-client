<?php

namespace Pbmedia\Networking4all;

class getProducts
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestGetProducts $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestGetProducts $request
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
     * @return \Pbmedia\Networking4all\getProducts
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestGetProducts
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestGetProducts $request
     * @return \Pbmedia\Networking4all\getProducts
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
