<?php

namespace Pbmedia\Networking4all;

class deleteRelationDomain
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestRelation $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestRelation $request
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
     * @return \Pbmedia\Networking4all\deleteRelationDomain
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestRelation
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestRelation $request
     * @return \Pbmedia\Networking4all\deleteRelationDomain
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
