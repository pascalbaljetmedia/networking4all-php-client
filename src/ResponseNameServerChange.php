<?php

namespace Pbmedia\Networking4all;

class ResponseNameServerChange
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
     * @return \Pbmedia\Networking4all\ResponseNameServerChange
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
