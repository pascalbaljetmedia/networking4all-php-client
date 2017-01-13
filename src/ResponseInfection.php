<?php

namespace Pbmedia\Networking4all;

class ResponseInfection
{

    /**
     * @var ResponseScanResults[] $infection
     */
    protected $infection = null;

    /**
     * @param ResponseScanResults[] $infection
     */
    public function __construct(array $infection)
    {
        $this->infection = $infection;
    }

    /**
     * @return ResponseScanResults[]
     */
    public function getInfection()
    {
        return $this->infection;
    }

    /**
     * @param ResponseScanResults[] $infection
     * @return \Pbmedia\Networking4all\ResponseInfection
     */
    public function setInfection(array $infection)
    {
        $this->infection = $infection;
        return $this;
    }
}
