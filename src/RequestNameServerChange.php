<?php

namespace Pbmedia\Networking4all;

class RequestNameServerChange
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var Nameserver[] $nameServers
     */
    protected $nameServers = null;

    /**
     * @param string $domain
     * @param Nameserver[] $nameServers
     */
    public function __construct($domain, array $nameServers)
    {
        $this->domain = $domain;
        $this->nameServers = $nameServers;
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
     * @return \Pbmedia\Networking4all\RequestNameServerChange
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return Nameserver[]
     */
    public function getNameServers()
    {
        return $this->nameServers;
    }

    /**
     * @param Nameserver[] $nameServers
     * @return \Pbmedia\Networking4all\RequestNameServerChange
     */
    public function setNameServers(array $nameServers)
    {
        $this->nameServers = $nameServers;
        return $this;
    }
}
