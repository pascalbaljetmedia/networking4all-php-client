<?php

namespace Pbmedia\Networking4all;

class ResponseOrderList
{

    /**
     * @var string $fromDate
     */
    protected $fromDate = null;

    /**
     * @var string $toDate
     */
    protected $toDate = null;

    /**
     * @var string $fromExpDate
     */
    protected $fromExpDate = null;

    /**
     * @var string $toExpDate
     */
    protected $toExpDate = null;

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var ResponseOrder[] $result
     */
    protected $result = null;

    /**
     * @param ResponseOrder[] $result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @param string $fromDate
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * @param string $toDate
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromExpDate()
    {
        return $this->fromExpDate;
    }

    /**
     * @param string $fromExpDate
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setFromExpDate($fromExpDate)
    {
        $this->fromExpDate = $fromExpDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getToExpDate()
    {
        return $this->toExpDate;
    }

    /**
     * @param string $toExpDate
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setToExpDate($toExpDate)
    {
        $this->toExpDate = $toExpDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return ResponseOrder[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param ResponseOrder[] $result
     * @return \Pbmedia\Networking4all\ResponseOrderList
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }
}
