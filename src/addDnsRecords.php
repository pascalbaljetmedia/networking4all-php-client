<?php

namespace Pbmedia\Networking4all;

class AddDnsRecords
{

    /**
     * @var addDnsRecord[] $dnsrecord
     */
    protected $dnsrecord = null;

    
    public function __construct()
    {
    }

    /**
     * @return addDnsRecord[]
     */
    public function getDnsrecord()
    {
        return $this->dnsrecord;
    }

    /**
     * @param addDnsRecord[] $dnsrecord
     * @return \Pbmedia\Networking4all\AddDnsRecords
     */
    public function setDnsrecord(array $dnsrecord = null)
    {
        $this->dnsrecord = $dnsrecord;
        return $this;
    }
}
