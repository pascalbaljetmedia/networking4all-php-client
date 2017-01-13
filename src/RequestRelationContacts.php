<?php

namespace Pbmedia\Networking4all;

class RequestRelationContacts
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string[] $contacts
     */
    protected $contacts = null;

    /**
     * @param string $handle
     * @param string[] $contacts
     */
    public function __construct($handle, array $contacts)
    {
        $this->handle = $handle;
        $this->contacts = $contacts;
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
     * @return \Pbmedia\Networking4all\RequestRelationContacts
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param string[] $contacts
     * @return \Pbmedia\Networking4all\RequestRelationContacts
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }
}
