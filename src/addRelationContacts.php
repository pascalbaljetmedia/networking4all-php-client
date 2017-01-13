<?php

namespace Pbmedia\Networking4all;

class addRelationContacts
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestRelationContacts $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestRelationContacts $request
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
     * @return \Pbmedia\Networking4all\addRelationContacts
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestRelationContacts
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestRelationContacts $request
     * @return \Pbmedia\Networking4all\addRelationContacts
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
