<?php

namespace Pbmedia\Networking4all;

class ResponseSSLReplace
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
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $fileContent
     */
    protected $fileContent = null;

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
     * @return \Pbmedia\Networking4all\ResponseSSLReplace
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
     * @return \Pbmedia\Networking4all\ResponseSSLReplace
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
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
     * @return \Pbmedia\Networking4all\ResponseSSLReplace
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
     * @return \Pbmedia\Networking4all\ResponseSSLReplace
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }
}
