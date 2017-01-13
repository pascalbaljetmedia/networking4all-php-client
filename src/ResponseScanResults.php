<?php

namespace Pbmedia\Networking4all;

class ResponseScanResults
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $type
     * @param string $date
     * @param string $url
     */
    public function __construct($type, $date, $url)
    {
        $this->type = $type;
        $this->date = $date;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \Pbmedia\Networking4all\ResponseScanResults
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return \Pbmedia\Networking4all\ResponseScanResults
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return \Pbmedia\Networking4all\ResponseScanResults
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \Pbmedia\Networking4all\ResponseScanResults
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
