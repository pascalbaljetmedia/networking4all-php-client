<?php

namespace Pbmedia\Networking4all;

class UpdateDnsRecords
{

    /**
     * @var UpdateDnsRecord[] $dnsrecord
     */
    protected $dnsrecord = null;

    
    public function __construct()
    {
    }

    /**
     * @return UpdateDnsRecord[]
     */
    public function getDnsrecord()
    {
        return $this->dnsrecord;
    }

    /**
     * @param UpdateDnsRecord[] $dnsrecord
     * @return \Pbmedia\Networking4all\UpdateDnsRecords
     */
    public function setDnsrecord(array $dnsrecord = null)
    {
        $this->dnsrecord = $dnsrecord;
        return $this;
    }
}
