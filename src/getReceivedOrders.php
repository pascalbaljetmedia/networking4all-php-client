<?php

namespace Pbmedia\Networking4all;

class getReceivedOrders
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestReceivedOrders $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestReceivedOrders $request
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
     * @return \Pbmedia\Networking4all\getReceivedOrders
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestReceivedOrders
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestReceivedOrders $request
     * @return \Pbmedia\Networking4all\getReceivedOrders
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
