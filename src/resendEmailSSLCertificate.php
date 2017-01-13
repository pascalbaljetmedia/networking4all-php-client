<?php

namespace Pbmedia\Networking4all;

class resendEmailSSLCertificate
{

    /**
     * @var RequestHeader $requestHeader
     */
    protected $requestHeader = null;

    /**
     * @var RequestResendEmail $request
     */
    protected $request = null;

    /**
     * @param RequestHeader $requestHeader
     * @param RequestResendEmail $request
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
     * @return \Pbmedia\Networking4all\resendEmailSSLCertificate
     */
    public function setRequestHeader($requestHeader)
    {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * @return RequestResendEmail
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestResendEmail $request
     * @return \Pbmedia\Networking4all\resendEmailSSLCertificate
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
