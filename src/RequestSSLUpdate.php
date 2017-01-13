<?php

namespace Pbmedia\Networking4all;

class RequestSSLUpdate
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $extraPreferences
     */
    protected $extraPreferences = null;

    /**
     * @param string $traceNumber
     * @param string $action
     */
    public function __construct($traceNumber, $action)
    {
        $this->traceNumber = $traceNumber;
        $this->action = $action;
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
     * @return \Pbmedia\Networking4all\RequestSSLUpdate
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return \Pbmedia\Networking4all\RequestSSLUpdate
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraPreferences()
    {
        return $this->extraPreferences;
    }

    /**
     * @param string $extraPreferences
     * @return \Pbmedia\Networking4all\RequestSSLUpdate
     */
    public function setExtraPreferences($extraPreferences)
    {
        $this->extraPreferences = $extraPreferences;
        return $this;
    }
}
