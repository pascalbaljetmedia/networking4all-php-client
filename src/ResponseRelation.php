<?php

namespace Pbmedia\Networking4all;

class ResponseRelation
{

    /**
     * @var string[] $handle
     */
    protected $handle = null;

    /**
     * @var Account $account
     */
    protected $account = null;

    /**
     * @param string[] $handle
     */
    public function __construct(array $handle)
    {
        $this->handle = $handle;
    }

    /**
     * @return string[]
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param string[] $handle
     * @return \Pbmedia\Networking4all\ResponseRelation
     */
    public function setHandle(array $handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param Account $account
     * @return \Pbmedia\Networking4all\ResponseRelation
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }
}
