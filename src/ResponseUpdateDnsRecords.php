<?php

namespace Pbmedia\Networking4all;

class ResponseUpdateDnsRecords
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
     * @return \Pbmedia\Networking4all\ResponseUpdateDnsRecords
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
