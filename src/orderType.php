<?php

namespace Pbmedia\Networking4all;

class orderType
{

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var string $receivedOn
     */
    protected $receivedOn = null;

    /**
     * @var string $receivedFrom
     */
    protected $receivedFrom = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $fileSize
     */
    protected $fileSize = null;

    /**
     * @param string $orderNumber
     * @param string $receivedOn
     * @param string $receivedFrom
     * @param string $key
     * @param string $fileSize
     */
    public function __construct($orderNumber, $receivedOn, $receivedFrom, $key, $fileSize)
    {
        $this->orderNumber = $orderNumber;
        $this->receivedOn = $receivedOn;
        $this->receivedFrom = $receivedFrom;
        $this->key = $key;
        $this->fileSize = $fileSize;
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
     * @return \Pbmedia\Networking4all\orderType
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceivedOn()
    {
        return $this->receivedOn;
    }

    /**
     * @param string $receivedOn
     * @return \Pbmedia\Networking4all\orderType
     */
    public function setReceivedOn($receivedOn)
    {
        $this->receivedOn = $receivedOn;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceivedFrom()
    {
        return $this->receivedFrom;
    }

    /**
     * @param string $receivedFrom
     * @return \Pbmedia\Networking4all\orderType
     */
    public function setReceivedFrom($receivedFrom)
    {
        $this->receivedFrom = $receivedFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return \Pbmedia\Networking4all\orderType
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param string $fileSize
     * @return \Pbmedia\Networking4all\orderType
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }
}
