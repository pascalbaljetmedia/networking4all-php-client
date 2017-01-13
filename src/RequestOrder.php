<?php

namespace Pbmedia\Networking4all;

class RequestOrder
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var ResponseGetSSLOption $option
     */
    protected $option = null;

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
     * @return \Pbmedia\Networking4all\RequestOrder
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return ResponseGetSSLOption
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param ResponseGetSSLOption $option
     * @return \Pbmedia\Networking4all\RequestOrder
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }
}
