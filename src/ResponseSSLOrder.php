<?php

namespace Pbmedia\Networking4all;

class ResponseSSLOrder
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
     * @var string $pickupPassword
     */
    protected $pickupPassword = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $fileContent
     */
    protected $fileContent = null;

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
     * @return \Pbmedia\Networking4all\ResponseSSLOrder
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
     * @return \Pbmedia\Networking4all\ResponseSSLOrder
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupPassword()
    {
        return $this->pickupPassword;
    }

    /**
     * @param string $pickupPassword
     * @return \Pbmedia\Networking4all\ResponseSSLOrder
     */
    public function setPickupPassword($pickupPassword)
    {
        $this->pickupPassword = $pickupPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \Pbmedia\Networking4all\ResponseSSLOrder
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * @param string $fileContent
     * @return \Pbmedia\Networking4all\ResponseSSLOrder
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }
}
