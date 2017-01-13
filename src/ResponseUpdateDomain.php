<?php

namespace Pbmedia\Networking4all;

class ResponseUpdateDomain
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var string $adminHandle
     */
    protected $adminHandle = null;

    /**
     * @var string $techHandle
     */
    protected $techHandle = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
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
     * @return \Pbmedia\Networking4all\ResponseUpdateDomain
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
     * @return \Pbmedia\Networking4all\ResponseUpdateDomain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminHandle()
    {
        return $this->adminHandle;
    }

    /**
     * @param string $adminHandle
     * @return \Pbmedia\Networking4all\ResponseUpdateDomain
     */
    public function setAdminHandle($adminHandle)
    {
        $this->adminHandle = $adminHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechHandle()
    {
        return $this->techHandle;
    }

    /**
     * @param string $techHandle
     * @return \Pbmedia\Networking4all\ResponseUpdateDomain
     */
    public function setTechHandle($techHandle)
    {
        $this->techHandle = $techHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Pbmedia\Networking4all\ResponseUpdateDomain
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
