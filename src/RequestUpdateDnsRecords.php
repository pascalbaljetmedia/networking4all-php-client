<?php

namespace Pbmedia\Networking4all;

class RequestUpdateDnsRecords
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var UpdateDnsRecords[] $dnsrecords
     */
    protected $dnsrecords = null;

    /**
     * @param string $domain
     * @param UpdateDnsRecords[] $dnsrecords
     */
    public function __construct($domain, array $dnsrecords)
    {
        $this->domain = $domain;
        $this->dnsrecords = $dnsrecords;
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
     * @return \Pbmedia\Networking4all\RequestUpdateDnsRecords
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return UpdateDnsRecords[]
     */
    public function getDnsrecords()
    {
        return $this->dnsrecords;
    }

    /**
     * @param UpdateDnsRecords[] $dnsrecords
     * @return \Pbmedia\Networking4all\RequestUpdateDnsRecords
     */
    public function setDnsrecords(array $dnsrecords)
    {
        $this->dnsrecords = $dnsrecords;
        return $this;
    }
}
