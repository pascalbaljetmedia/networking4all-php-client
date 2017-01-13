<?php

namespace Pbmedia\Networking4all;

class ResponseOrders
{

    /**
     * @var orderType[] $order
     */
    protected $order = null;

    
    public function __construct()
    {
    }

    /**
     * @return orderType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param orderType[] $order
     * @return \Pbmedia\Networking4all\ResponseOrders
     */
    public function setOrder(array $order = null)
    {
        $this->order = $order;
        return $this;
    }
}
