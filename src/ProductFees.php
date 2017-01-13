<?php

namespace Pbmedia\Networking4all;

class ProductFees
{

    /**
     * @var ProductSetup $setup
     */
    protected $setup = null;

    /**
     * @var ProductFee[] $fee
     */
    protected $fee = null;

    /**
     * @param ProductSetup $setup
     * @param ProductFee[] $fee
     */
    public function __construct($setup, array $fee)
    {
        $this->setup = $setup;
        $this->fee = $fee;
    }

    /**
     * @return ProductSetup
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * @param ProductSetup $setup
     * @return \Pbmedia\Networking4all\ProductFees
     */
    public function setSetup($setup)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * @return ProductFee[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param ProductFee[] $fee
     * @return \Pbmedia\Networking4all\ProductFees
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }
}
