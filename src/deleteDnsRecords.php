<?php

namespace Pbmedia\Networking4all;

class DeleteDnsRecords
{

    /**
     * @var DeleteDnsRecord[] $dnsrecord
     */
    protected $dnsrecord = null;

    
    public function __construct()
    {
    }

    /**
     * @return DeleteDnsRecord[]
     */
    public function getDnsrecord()
    {
        return $this->dnsrecord;
    }

    /**
     * @param DeleteDnsRecord[] $dnsrecord
     * @return \Pbmedia\Networking4all\DeleteDnsRecords
     */
    public function setDnsrecord(array $dnsrecord = null)
    {
        $this->dnsrecord = $dnsrecord;
        return $this;
    }
}
