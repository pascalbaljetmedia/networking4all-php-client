<?php

namespace Pbmedia\Networking4all;

class ResponseSubstatusses
{

    /**
     * @var ResponseSubstatus[] $substatus
     */
    protected $substatus = null;

    
    public function __construct()
    {
    }

    /**
     * @return ResponseSubstatus[]
     */
    public function getSubstatus()
    {
        return $this->substatus;
    }

    /**
     * @param ResponseSubstatus[] $substatus
     * @return \Pbmedia\Networking4all\ResponseSubstatusses
     */
    public function setSubstatus(array $substatus = null)
    {
        $this->substatus = $substatus;
        return $this;
    }
}
