<?php

namespace Pbmedia\Networking4all;

class DomainCheck
{

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var string $availabilityCode
     */
    protected $availabilityCode = null;

    /**
     * @var string $availabilityMessage
     */
    protected $availabilityMessage = null;

    /**
     * @param string $domain
     * @param string $availabilityCode
     * @param string $availabilityMessage
     */
    public function __construct($domain, $availabilityCode, $availabilityMessage)
    {
        $this->domain = $domain;
        $this->availabilityCode = $availabilityCode;
        $this->availabilityMessage = $availabilityMessage;
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
     * @return \Pbmedia\Networking4all\DomainCheck
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailabilityCode()
    {
        return $this->availabilityCode;
    }

    /**
     * @param string $availabilityCode
     * @return \Pbmedia\Networking4all\DomainCheck
     */
    public function setAvailabilityCode($availabilityCode)
    {
        $this->availabilityCode = $availabilityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailabilityMessage()
    {
        return $this->availabilityMessage;
    }

    /**
     * @param string $availabilityMessage
     * @return \Pbmedia\Networking4all\DomainCheck
     */
    public function setAvailabilityMessage($availabilityMessage)
    {
        $this->availabilityMessage = $availabilityMessage;
        return $this;
    }
}
