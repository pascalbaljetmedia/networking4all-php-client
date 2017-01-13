<?php

namespace Pbmedia\Networking4all;

class ResponseResendEmail
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var string $approverEmail
     */
    protected $approverEmail = null;

    /**
     * @param string $traceNumber
     * @param string $orderNumber
     */
    public function __construct($traceNumber, $orderNumber)
    {
        $this->traceNumber = $traceNumber;
        $this->orderNumber = $orderNumber;
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
     * @return \Pbmedia\Networking4all\ResponseResendEmail
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \Pbmedia\Networking4all\ResponseResendEmail
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
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
     * @return \Pbmedia\Networking4all\ResponseResendEmail
     */
    public function setApproverEmail($approverEmail)
    {
        $this->approverEmail = $approverEmail;
        return $this;
    }
}
