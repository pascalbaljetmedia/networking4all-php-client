<?php

namespace Pbmedia\Networking4all;

class ResponseRelationClients
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string $result
     */
    protected $result = null;

    /**
     * @param string $handle
     * @param string $result
     */
    public function __construct($handle, $result)
    {
        $this->handle = $handle;
        $this->result = $result;
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
     * @return \Pbmedia\Networking4all\ResponseRelationClients
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return \Pbmedia\Networking4all\ResponseRelationClients
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
