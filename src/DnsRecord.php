<?php

namespace Pbmedia\Networking4all;

class DnsRecord
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $ttl
     */
    protected $ttl = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $name
     * @param string $type
     * @param string $value
     */
    public function __construct($name, $type, $value)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Pbmedia\Networking4all\DnsRecord
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @param string $ttl
     * @return \Pbmedia\Networking4all\DnsRecord
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \Pbmedia\Networking4all\DnsRecord
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return \Pbmedia\Networking4all\DnsRecord
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
