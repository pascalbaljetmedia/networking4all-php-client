<?php

namespace Pbmedia\Networking4all;

class RequestSSLOrderOptions
{

    /**
     * @var string $approverMethod
     */
    protected $approverMethod = null;

    /**
     * @param string $approverMethod
     */
    public function __construct($approverMethod)
    {
        $this->approverMethod = $approverMethod;
    }

    /**
     * @return string
     */
    public function getApproverMethod()
    {
        return $this->approverMethod;
    }

    /**
     * @param string $approverMethod
     * @return \Pbmedia\Networking4all\RequestSSLOrderOptions
     */
    public function setApproverMethod($approverMethod)
    {
        $this->approverMethod = $approverMethod;
        return $this;
    }
}
