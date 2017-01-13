<?php

namespace Pbmedia\Networking4all;

class ItemContact
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var Contact $contact
     */
    protected $contact = null;

    /**
     * @param string $handle
     * @param Contact $contact
     */
    public function __construct($handle, $contact)
    {
        $this->handle = $handle;
        $this->contact = $contact;
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
     * @return \Pbmedia\Networking4all\ItemContact
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return \Pbmedia\Networking4all\ItemContact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }
}
