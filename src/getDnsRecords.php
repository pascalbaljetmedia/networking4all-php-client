<?php

namespace Pbmedia\Networking4all;

class getDnsRecords
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestGetDnsRecords $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestGetDnsRecords $request
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
     * @return \Pbmedia\Networking4all\getDnsRecords
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestGetDnsRecords
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestGetDnsRecords $request
     * @return \Pbmedia\Networking4all\getDnsRecords
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
