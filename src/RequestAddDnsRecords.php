<?php

namespace Pbmedia\Networking4all;

class RequestAddDnsRecords
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var AddDnsRecords[] $dnsrecords
     */
    protected $dnsrecords = null;

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
     * @return \Pbmedia\Networking4all\RequestAddDnsRecords
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return AddDnsRecords[]
     */
    public function getDnsrecords()
    {
        return $this->dnsrecords;
    }

    /**
     * @param AddDnsRecords[] $dnsrecords
     * @return \Pbmedia\Networking4all\RequestAddDnsRecords
     */
    public function setDnsrecords(array $dnsrecords = null)
    {
        $this->dnsrecords = $dnsrecords;
        return $this;
    }
}
