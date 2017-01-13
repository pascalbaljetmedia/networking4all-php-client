<?php

namespace Pbmedia\Networking4all;

class ResponseOrderStatus
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var ResponseSubstatusses $substatusses
     */
    protected $substatusses = null;

    /**
     * @param string $code
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return \Pbmedia\Networking4all\ResponseOrderStatus
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return \Pbmedia\Networking4all\ResponseOrderStatus
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return ResponseSubstatusses
     */
    public function getSubstatusses()
    {
        return $this->substatusses;
    }

    /**
     * @param ResponseSubstatusses $substatusses
     * @return \Pbmedia\Networking4all\ResponseOrderStatus
     */
    public function setSubstatusses($substatusses)
    {
        $this->substatusses = $substatusses;
        return $this;
    }
}
