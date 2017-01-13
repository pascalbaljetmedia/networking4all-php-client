<?php

namespace Pbmedia\Networking4all;

class ResponseDomainCheck
{

    /**
     * @var DomainCheck[] $result
     */
    protected $result = null;

    /**
     * @param DomainCheck[] $result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }

    /**
     * @return DomainCheck[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DomainCheck[] $result
     * @return \Pbmedia\Networking4all\ResponseDomainCheck
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }
}
