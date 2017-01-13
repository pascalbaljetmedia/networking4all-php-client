<?php

namespace Pbmedia\Networking4all;

class RequestDeleteDnsRecords
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var DeleteDnsRecords $dnsrecords
     */
    protected $dnsrecords = null;

    /**
     * @param string $domain
     * @param DeleteDnsRecords $dnsrecords
     */
    public function __construct($domain, $dnsrecords)
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
     * @return \Pbmedia\Networking4all\RequestDeleteDnsRecords
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return DeleteDnsRecords
     */
    public function getDnsrecords()
    {
        return $this->dnsrecords;
    }

    /**
     * @param DeleteDnsRecords $dnsrecords
     * @return \Pbmedia\Networking4all\RequestDeleteDnsRecords
     */
    public function setDnsrecords($dnsrecords)
    {
        $this->dnsrecords = $dnsrecords;
        return $this;
    }
}
