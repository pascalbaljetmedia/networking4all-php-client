<?php

namespace Pbmedia\Networking4all;

class RequestChangeSAN
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string[] $san
     */
    protected $san = null;

    /**
     * @param string $traceNumber
     * @param string[] $san
     */
    public function __construct($traceNumber, array $san)
    {
        $this->traceNumber = $traceNumber;
        $this->san = $san;
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
     * @return \Pbmedia\Networking4all\RequestChangeSAN
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSan()
    {
        return $this->san;
    }

    /**
     * @param string[] $san
     * @return \Pbmedia\Networking4all\RequestChangeSAN
     */
    public function setSan(array $san)
    {
        $this->san = $san;
        return $this;
    }
}
