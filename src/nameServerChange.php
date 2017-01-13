<?php

namespace Pbmedia\Networking4all;

class nameServerChange
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestNameServerChange $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestNameServerChange $request
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
     * @return \Pbmedia\Networking4all\nameServerChange
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestNameServerChange
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestNameServerChange $request
     * @return \Pbmedia\Networking4all\nameServerChange
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
