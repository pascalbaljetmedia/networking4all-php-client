<?php

namespace Pbmedia\Networking4all;

class OptionsRelation
{

    /**
     * @var string $createAccount
     */
    protected $createAccount = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getCreateAccount()
    {
        return $this->createAccount;
    }

    /**
     * @param string $createAccount
     * @return \Pbmedia\Networking4all\OptionsRelation
     */
    public function setCreateAccount($createAccount)
    {
        $this->createAccount = $createAccount;
        return $this;
    }
}
