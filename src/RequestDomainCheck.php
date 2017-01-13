<?php

namespace Pbmedia\Networking4all;

class RequestDomainCheck
{

    /**
     * @var string[] $domain
     */
    protected $domain = null;

    /**
     * @param string[] $domain
     */
    public function __construct(array $domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return string[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string[] $domain
     * @return \Pbmedia\Networking4all\RequestDomainCheck
     */
    public function setDomain(array $domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
