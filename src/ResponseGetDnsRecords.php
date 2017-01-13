<?php

namespace Pbmedia\Networking4all;

class ResponseGetDnsRecords
{

    /**
     * @var DnsRecords[] $dnsrecords
     */
    protected $dnsrecords = null;

    
    public function __construct()
    {
    }

    /**
     * @return DnsRecords[]
     */
    public function getDnsrecords()
    {
        return $this->dnsrecords;
    }

    /**
     * @param DnsRecords[] $dnsrecords
     * @return \Pbmedia\Networking4all\ResponseGetDnsRecords
     */
    public function setDnsrecords(array $dnsrecords = null)
    {
        $this->dnsrecords = $dnsrecords;
        return $this;
    }
}
