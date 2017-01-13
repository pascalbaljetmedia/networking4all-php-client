<?php

namespace Pbmedia\Networking4all;

class ProductSetup
{

    /**
     * @var string $retail
     */
    protected $retail = null;

    /**
     * @var string $actual
     */
    protected $actual = null;

    /**
     * @param string $retail
     * @param string $actual
     */
    public function __construct($retail, $actual)
    {
        $this->retail = $retail;
        $this->actual = $actual;
    }

    /**
     * @return string
     */
    public function getRetail()
    {
        return $this->retail;
    }

    /**
     * @param string $retail
     * @return \Pbmedia\Networking4all\ProductSetup
     */
    public function setRetail($retail)
    {
        $this->retail = $retail;
        return $this;
    }

    /**
     * @return string
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * @param string $actual
     * @return \Pbmedia\Networking4all\ProductSetup
     */
    public function setActual($actual)
    {
        $this->actual = $actual;
        return $this;
    }
}
