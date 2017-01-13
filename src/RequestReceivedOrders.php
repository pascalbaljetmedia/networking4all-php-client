<?php

namespace Pbmedia\Networking4all;

class RequestReceivedOrders
{

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @param int $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Pbmedia\Networking4all\RequestReceivedOrders
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
