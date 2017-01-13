<?php

namespace Pbmedia\Networking4all;

class RequestHeader
{

    /**
     * @var Auth $auth
     */
    protected $auth = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $test
     */
    protected $test = null;

    /**
     * @param Auth $auth
     */
    public function __construct($auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return Auth
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param Auth $auth
     * @return \Pbmedia\Networking4all\RequestHeader
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return \Pbmedia\Networking4all\RequestHeader
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return \Pbmedia\Networking4all\RequestHeader
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param string $test
     * @return \Pbmedia\Networking4all\RequestHeader
     */
    public function setTest($test)
    {
        $this->test = $test;
        return $this;
    }
}
