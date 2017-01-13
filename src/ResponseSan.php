<?php

namespace Pbmedia\Networking4all;

class ResponseSan
{

    /**
     * @var string[] $san
     */
    protected $san = null;

    /**
     * @param string[] $san
     */
    public function __construct(array $san)
    {
        $this->san = $san;
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
     * @return \Pbmedia\Networking4all\ResponseSan
     */
    public function setSan(array $san)
    {
        $this->san = $san;
        return $this;
    }
}
