<?php

namespace Pbmedia\Networking4all;

class RequestRelation
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $firstname
     */
    protected $firstname = null;

    /**
     * @var string $lastname
     */
    protected $lastname = null;

    
    public function __construct()
    {
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
     * @return \Pbmedia\Networking4all\RequestRelation
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
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
     * @return \Pbmedia\Networking4all\RequestRelation
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \Pbmedia\Networking4all\RequestRelation
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return \Pbmedia\Networking4all\RequestRelation
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return \Pbmedia\Networking4all\RequestRelation
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }
}
