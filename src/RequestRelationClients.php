<?php

namespace Pbmedia\Networking4all;

class RequestRelationClients
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string[] $clients
     */
    protected $clients = null;

    /**
     * @param string $handle
     * @param string[] $clients
     */
    public function __construct($handle, array $clients)
    {
        $this->handle = $handle;
        $this->clients = $clients;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     * @return \Pbmedia\Networking4all\RequestRelationClients
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param string[] $clients
     * @return \Pbmedia\Networking4all\RequestRelationClients
     */
    public function setClients(array $clients)
    {
        $this->clients = $clients;
        return $this;
    }
}
