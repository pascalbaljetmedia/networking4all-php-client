<?php

namespace Pbmedia\Networking4all;

class ResponseExtraServicesResult
{

    /**
     * @var string $extraPreferences
     */
    protected $extraPreferences = null;

    /**
     * @var ResponseScanServices $extraServicesResults
     */
    protected $extraServicesResults = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getExtraPreferences()
    {
        return $this->extraPreferences;
    }

    /**
     * @param string $extraPreferences
     * @return \Pbmedia\Networking4all\ResponseExtraServicesResult
     */
    public function setExtraPreferences($extraPreferences)
    {
        $this->extraPreferences = $extraPreferences;
        return $this;
    }

    /**
     * @return ResponseScanServices
     */
    public function getExtraServicesResults()
    {
        return $this->extraServicesResults;
    }

    /**
     * @param ResponseScanServices $extraServicesResults
     * @return \Pbmedia\Networking4all\ResponseExtraServicesResult
     */
    public function setExtraServicesResults($extraServicesResults)
    {
        $this->extraServicesResults = $extraServicesResults;
        return $this;
    }
}
