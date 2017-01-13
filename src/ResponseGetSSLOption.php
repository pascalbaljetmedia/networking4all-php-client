<?php

namespace Pbmedia\Networking4all;

class ResponseGetSSLOption
{

    /**
     * @var string $returnAllSSLSubstatus
     */
    protected $returnAllSSLSubstatus = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getReturnAllSSLSubstatus()
    {
        return $this->returnAllSSLSubstatus;
    }

    /**
     * @param string $returnAllSSLSubstatus
     * @return \Pbmedia\Networking4all\ResponseGetSSLOption
     */
    public function setReturnAllSSLSubstatus($returnAllSSLSubstatus)
    {
        $this->returnAllSSLSubstatus = $returnAllSSLSubstatus;
        return $this;
    }
}
