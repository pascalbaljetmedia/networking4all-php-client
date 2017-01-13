<?php

namespace Pbmedia\Networking4all;

class Account
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $passwordConfirm
     */
    protected $passwordConfirm = null;

    
    public function __construct()
    {
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
     * @return \Pbmedia\Networking4all\Account
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
     * @return \Pbmedia\Networking4all\Account
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordConfirm()
    {
        return $this->passwordConfirm;
    }

    /**
     * @param string $passwordConfirm
     * @return \Pbmedia\Networking4all\Account
     */
    public function setPasswordConfirm($passwordConfirm)
    {
        $this->passwordConfirm = $passwordConfirm;
        return $this;
    }
}
