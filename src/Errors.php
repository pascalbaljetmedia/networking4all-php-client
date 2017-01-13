<?php

namespace Pbmedia\Networking4all;

class Errors
{

    /**
     * @var Error[] $error
     */
    protected $error = null;

    
    public function __construct()
    {
    }

    /**
     * @return Error[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param Error[] $error
     * @return \Pbmedia\Networking4all\Errors
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }
}
