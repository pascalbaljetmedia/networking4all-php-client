<?php

namespace Pbmedia\Networking4all;

class updateRelation
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestRelationUpdate $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestRelationUpdate $request
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
     * @return \Pbmedia\Networking4all\updateRelation
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestRelationUpdate
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestRelationUpdate $request
     * @return \Pbmedia\Networking4all\updateRelation
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
