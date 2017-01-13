<?php

namespace Pbmedia\Networking4all;

class ResponseDeleteDnsRecords
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @param string $domain
     */
    public function __construct($domain)
    {
        $this->domain = $domain;
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
     * @return \Pbmedia\Networking4all\ResponseDeleteDnsRecords
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
