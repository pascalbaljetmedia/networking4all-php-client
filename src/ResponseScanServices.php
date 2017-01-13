<?php

namespace Pbmedia\Networking4all;

class ResponseScanServices
{

    /**
     * @var string $lastScanDate
     */
    protected $lastScanDate = null;

    /**
     * @var string $sealStatus
     */
    protected $sealStatus = null;

    /**
     * @var string $scanStatus
     */
    protected $scanStatus = null;

    /**
     * @var string $resultsFound
     */
    protected $resultsFound = null;

    /**
     * @var ResponseInfection $scanResults
     */
    protected $scanResults = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getLastScanDate()
    {
        return $this->lastScanDate;
    }

    /**
     * @param string $lastScanDate
     * @return \Pbmedia\Networking4all\ResponseScanServices
     */
    public function setLastScanDate($lastScanDate)
    {
        $this->lastScanDate = $lastScanDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSealStatus()
    {
        return $this->sealStatus;
    }

    /**
     * @param string $sealStatus
     * @return \Pbmedia\Networking4all\ResponseScanServices
     */
    public function setSealStatus($sealStatus)
    {
        $this->sealStatus = $sealStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getScanStatus()
    {
        return $this->scanStatus;
    }

    /**
     * @param string $scanStatus
     * @return \Pbmedia\Networking4all\ResponseScanServices
     */
    public function setScanStatus($scanStatus)
    {
        $this->scanStatus = $scanStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultsFound()
    {
        return $this->resultsFound;
    }

    /**
     * @param string $resultsFound
     * @return \Pbmedia\Networking4all\ResponseScanServices
     */
    public function setResultsFound($resultsFound)
    {
        $this->resultsFound = $resultsFound;
        return $this;
    }

    /**
     * @return ResponseInfection
     */
    public function getScanResults()
    {
        return $this->scanResults;
    }

    /**
     * @param ResponseInfection $scanResults
     * @return \Pbmedia\Networking4all\ResponseScanServices
     */
    public function setScanResults($scanResults)
    {
        $this->scanResults = $scanResults;
        return $this;
    }
}
