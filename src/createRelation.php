<?php

namespace Pbmedia\Networking4all;

class createRelation
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestRelationCreate $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestRelationCreate $request
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
     * @return \Pbmedia\Networking4all\createRelation
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestRelationCreate
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestRelationCreate $request
     * @return \Pbmedia\Networking4all\createRelation
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
