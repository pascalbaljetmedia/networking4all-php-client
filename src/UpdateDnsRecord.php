<?php

namespace Pbmedia\Networking4all;

class UpdateDnsRecord
{

    /**
     * @var UpdateDnsRecordOld[] $old
     */
    protected $old = null;

    /**
     * @var UpdateDnsRecordNew[] $new
     */
    protected $new = null;

    /**
     * @param UpdateDnsRecordOld[] $old
     * @param UpdateDnsRecordNew[] $new
     */
    public function __construct(array $old, array $new)
    {
        $this->old = $old;
        $this->new = $new;
    }

    /**
     * @return UpdateDnsRecordOld[]
     */
    public function getOld()
    {
        return $this->old;
    }

    /**
     * @param UpdateDnsRecordOld[] $old
     * @return \Pbmedia\Networking4all\UpdateDnsRecord
     */
    public function setOld(array $old)
    {
        $this->old = $old;
        return $this;
    }

    /**
     * @return UpdateDnsRecordNew[]
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @param UpdateDnsRecordNew[] $new
     * @return \Pbmedia\Networking4all\UpdateDnsRecord
     */
    public function setNew(array $new)
    {
        $this->new = $new;
        return $this;
    }
}
