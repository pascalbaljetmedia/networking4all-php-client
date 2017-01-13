<?php

namespace Pbmedia\Networking4all;

class ResponseApproverList
{

    /**
     * @var string[] $approvers
     */
    protected $approvers = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    
    public function __construct()
    {
    }

    /**
     * @return string[]
     */
    public function getApprovers()
    {
        return $this->approvers;
    }

    /**
     * @param string[] $approvers
     * @return \Pbmedia\Networking4all\ResponseApproverList
     */
    public function setApprovers(array $approvers = null)
    {
        $this->approvers = $approvers;
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
     * @return \Pbmedia\Networking4all\ResponseApproverList
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
}
