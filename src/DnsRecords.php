<?php

namespace Pbmedia\Networking4all;

class DnsRecords
{

    /**
     * @var DnsRecord[] $dnsrecord
     */
    protected $dnsrecord = null;

    
    public function __construct()
    {
    }

    /**
     * @return DnsRecord[]
     */
    public function getDnsrecord()
    {
        return $this->dnsrecord;
    }

    /**
     * @param DnsRecord[] $dnsrecord
     * @return \Pbmedia\Networking4all\DnsRecords
     */
    public function setDnsrecord(array $dnsrecord = null)
    {
        $this->dnsrecord = $dnsrecord;
        return $this;
    }
}
