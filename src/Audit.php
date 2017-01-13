<?php

namespace Pbmedia\Networking4all;

class Audit
{

    /**
     * @var string $created
     */
    protected $created = null;

    /**
     * @var string $createdHandle
     */
    protected $createdHandle = null;

    /**
     * @var string $updated
     */
    protected $updated = null;

    /**
     * @var string $updatedHandle
     */
    protected $updatedHandle = null;

    /**
     * @param string $created
     */
    public function __construct($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return \Pbmedia\Networking4all\Audit
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedHandle()
    {
        return $this->createdHandle;
    }

    /**
     * @param string $createdHandle
     * @return \Pbmedia\Networking4all\Audit
     */
    public function setCreatedHandle($createdHandle)
    {
        $this->createdHandle = $createdHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     * @return \Pbmedia\Networking4all\Audit
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedHandle()
    {
        return $this->updatedHandle;
    }

    /**
     * @param string $updatedHandle
     * @return \Pbmedia\Networking4all\Audit
     */
    public function setUpdatedHandle($updatedHandle)
    {
        $this->updatedHandle = $updatedHandle;
        return $this;
    }
}
