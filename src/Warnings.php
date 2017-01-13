<?php

namespace Pbmedia\Networking4all;

class Warnings
{

    /**
     * @var Error[] $warning
     */
    protected $warning = null;

    
    public function __construct()
    {
    }

    /**
     * @return Error[]
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * @param Error[] $warning
     * @return \Pbmedia\Networking4all\Warnings
     */
    public function setWarning(array $warning = null)
    {
        $this->warning = $warning;
        return $this;
    }
}
