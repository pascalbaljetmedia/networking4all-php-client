<?php

namespace Pbmedia\Networking4all;

class RequestGetDnsRecords
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    
    public function __construct()
    {
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
     * @return \Pbmedia\Networking4all\RequestGetDnsRecords
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return \Pbmedia\Networking4all\RequestGetDnsRecords
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
