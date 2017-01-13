<?php

namespace Pbmedia\Networking4all;

class RequestSSLReplace
{

    /**
     * @var string $traceNumber
     */
    protected $traceNumber = null;

    /**
     * @var string $csr
     */
    protected $csr = null;

    /**
     * @var string $approverEmail
     */
    protected $approverEmail = null;

    /**
     * @var string[] $san
     */
    protected $san = null;

    /**
     * @var RequestSSLOrderOptions $option
     */
    protected $option = null;

    /**
     * @param string $traceNumber
     * @param string $csr
     */
    public function __construct($traceNumber, $csr)
    {
        $this->traceNumber = $traceNumber;
        $this->csr = $csr;
    }

    /**
     * @return string
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }

    /**
     * @param string $traceNumber
     * @return \Pbmedia\Networking4all\RequestSSLReplace
     */
    public function setTraceNumber($traceNumber)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCsr()
    {
        return $this->csr;
    }

    /**
     * @param string $csr
     * @return \Pbmedia\Networking4all\RequestSSLReplace
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail()
    {
        return $this->approverEmail;
    }

    /**
     * @param string $approverEmail
     * @return \Pbmedia\Networking4all\RequestSSLReplace
     */
    public function setApproverEmail($approverEmail)
    {
        $this->approverEmail = $approverEmail;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSan()
    {
        return $this->san;
    }

    /**
     * @param string[] $san
     * @return \Pbmedia\Networking4all\RequestSSLReplace
     */
    public function setSan(array $san = null)
    {
        $this->san = $san;
        return $this;
    }

    /**
     * @return RequestSSLOrderOptions
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param RequestSSLOrderOptions $option
     * @return \Pbmedia\Networking4all\RequestSSLReplace
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }
}
