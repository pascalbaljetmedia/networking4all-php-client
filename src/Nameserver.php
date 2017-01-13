<?php

namespace Pbmedia\Networking4all;

class Nameserver
{

    /**
     * @var string $ns
     */
    protected $ns = null;

    /**
     * @var string $ipv4
     */
    protected $ipv4 = null;

    /**
     * @var string $ipv6
     */
    protected $ipv6 = null;

    /**
     * @param string $ns
     */
    public function __construct($ns)
    {
        $this->ns = $ns;
    }

    /**
     * @return string
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * @param string $ns
     * @return \Pbmedia\Networking4all\Nameserver
     */
    public function setNs($ns)
    {
        $this->ns = $ns;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpv4()
    {
        return $this->ipv4;
    }

    /**
     * @param string $ipv4
     * @return \Pbmedia\Networking4all\Nameserver
     */
    public function setIpv4($ipv4)
    {
        $this->ipv4 = $ipv4;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * @param string $ipv6
     * @return \Pbmedia\Networking4all\Nameserver
     */
    public function setIpv6($ipv6)
    {
        $this->ipv6 = $ipv6;
        return $this;
    }
}
