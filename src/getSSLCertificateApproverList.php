<?php

namespace Pbmedia\Networking4all;

class getSSLCertificateApproverList
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestApproverList $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestApproverList $request
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
     * @return \Pbmedia\Networking4all\getSSLCertificateApproverList
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestApproverList
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestApproverList $request
     * @return \Pbmedia\Networking4all\getSSLCertificateApproverList
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
