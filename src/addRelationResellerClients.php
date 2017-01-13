<?php

namespace Pbmedia\Networking4all;

class addRelationResellerClients
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestRelationClients $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestRelationClients $request
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
     * @return \Pbmedia\Networking4all\addRelationResellerClients
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestRelationClients
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestRelationClients $request
     * @return \Pbmedia\Networking4all\addRelationResellerClients
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
