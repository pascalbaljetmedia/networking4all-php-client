<?php

namespace Pbmedia\Networking4all;

class ResponseHeader
{

    /**
     * @var string $resultCode
     */
    protected $resultCode = null;

    /**
     * @var string $resultMessage
     */
    protected $resultMessage = null;

    /**
     * @var Warnings $warnings
     */
    protected $warnings = null;

    /**
     * @var Errors $errors
     */
    protected $errors = null;

    /**
     * @var string $timestamp
     */
    protected $timestamp = null;

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
     * @param string $resultCode
     * @param string $timestamp
     */
    public function __construct($resultCode, $timestamp)
    {
        $this->resultCode = $resultCode;
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param string $resultCode
     * @return \Pbmedia\Networking4all\ResponseHeader
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultMessage()
    {
        return $this->resultMessage;
    }

    /**
     * @param string $resultMessage
     * @return \Pbmedia\Networking4all\ResponseHeader
     */
    public function setResultMessage($resultMessage)
    {
        $this->resultMessage = $resultMessage;
        return $this;
    }

    /**
     * @return Warnings
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * @param Warnings $warnings
     * @return \Pbmedia\Networking4all\ResponseHeader
     */
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * @return Errors
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Errors $errors
     * @return \Pbmedia\Networking4all\ResponseHeader
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return \Pbmedia\Networking4all\ResponseHeader
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
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
     * @return \Pbmedia\Networking4all\ResponseHeader
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
     * @return \Pbmedia\Networking4all\ResponseHeader
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
     * @return \Pbmedia\Networking4all\ResponseHeader
     */
    public function setTest($test)
    {
        $this->test = $test;
        return $this;
    }
}
