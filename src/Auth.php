<?php

namespace Pbmedia\Networking4all;

class Auth
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $handle
     * @param string $username
     * @param string $password
     */
    public function __construct($handle, $username, $password)
    {
        $this->handle = $handle;
        $this->username = $username;
        $this->password = $password;
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
     * @return \Pbmedia\Networking4all\Auth
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return \Pbmedia\Networking4all\Auth
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \Pbmedia\Networking4all\Auth
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
