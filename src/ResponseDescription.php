<?php

namespace Pbmedia\Networking4all;

class ResponseDescription
{

    /**
     * @var string $short
     */
    protected $short = null;

    /**
     * @var string $long
     */
    protected $long = null;

    /**
     * @param string $short
     */
    public function __construct($short)
    {
        $this->short = $short;
    }

    /**
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param string $short
     * @return \Pbmedia\Networking4all\ResponseDescription
     */
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }

    /**
     * @return string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param string $long
     * @return \Pbmedia\Networking4all\ResponseDescription
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }
}
