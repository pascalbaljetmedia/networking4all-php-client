<?php

namespace Pbmedia\Networking4all;

class RequestResendEmail
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $approverEmail
     */
    protected $approverEmail = null;

    /**
     * @param string $traceNumber
     */
    public function __construct($traceNumber)
    {
        $this->traceNumber = $traceNumber;
    }

    /**
     * @return string
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }

    /**
     * @param string $traceNumber
     * @return \Pbmedia\Networking4all\RequestResendEmail
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail()
    {
        return $this->approverEmail;
    }

    /**
     * @param string $approverEmail
     * @return \Pbmedia\Networking4all\RequestResendEmail
     */
    public function setApproverEmail($approverEmail)
    {
        $this->approverEmail = $approverEmail;
        return $this;
    }
}
