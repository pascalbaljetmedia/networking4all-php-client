<?php

namespace Pbmedia\Networking4all;

class ResponseProductDetails
{

    /**
     * @var string $mailValidation
     */
    protected $mailValidation = null;

    /**
     * @var string $dv
     */
    protected $dv = null;

    /**
     * @var string $ov
     */
    protected $ov = null;

    /**
     * @var string $ev
     */
    protected $ev = null;

    /**
     * @var string $webserver
     */
    protected $webserver = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $codesigning
     */
    protected $codesigning = null;

    /**
     * @var string $san
     */
    protected $san = null;

    /**
     * @var string $wildcard
     */
    protected $wildcard = null;

    /**
     * @var string $intranet
     */
    protected $intranet = null;

    /**
     * @var string $mobile
     */
    protected $mobile = null;

    /**
     * @var string $sgc
     */
    protected $sgc = null;

    /**
     * @var string $licences
     */
    protected $licences = null;

    /**
     * @var string $competitiveUpgrade
     */
    protected $competitiveUpgrade = null;

    /**
     * @var string $sanMin
     */
    protected $sanMin = null;

    /**
     * @var string $sanMax
     */
    protected $sanMax = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getMailValidation()
    {
        return $this->mailValidation;
    }

    /**
     * @param string $mailValidation
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setMailValidation($mailValidation)
    {
        $this->mailValidation = $mailValidation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDv()
    {
        return $this->dv;
    }

    /**
     * @param string $dv
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setDv($dv)
    {
        $this->dv = $dv;
        return $this;
    }

    /**
     * @return string
     */
    public function getOv()
    {
        return $this->ov;
    }

    /**
     * @param string $ov
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setOv($ov)
    {
        $this->ov = $ov;
        return $this;
    }

    /**
     * @return string
     */
    public function getEv()
    {
        return $this->ev;
    }

    /**
     * @param string $ev
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setEv($ev)
    {
        $this->ev = $ev;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebserver()
    {
        return $this->webserver;
    }

    /**
     * @param string $webserver
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setWebserver($webserver)
    {
        $this->webserver = $webserver;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodesigning()
    {
        return $this->codesigning;
    }

    /**
     * @param string $codesigning
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setCodesigning($codesigning)
    {
        $this->codesigning = $codesigning;
        return $this;
    }

    /**
     * @return string
     */
    public function getSan()
    {
        return $this->san;
    }

    /**
     * @param string $san
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setSan($san)
    {
        $this->san = $san;
        return $this;
    }

    /**
     * @return string
     */
    public function getWildcard()
    {
        return $this->wildcard;
    }

    /**
     * @param string $wildcard
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setWildcard($wildcard)
    {
        $this->wildcard = $wildcard;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntranet()
    {
        return $this->intranet;
    }

    /**
     * @param string $intranet
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setIntranet($intranet)
    {
        $this->intranet = $intranet;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getSgc()
    {
        return $this->sgc;
    }

    /**
     * @param string $sgc
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setSgc($sgc)
    {
        $this->sgc = $sgc;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicences()
    {
        return $this->licences;
    }

    /**
     * @param string $licences
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setLicences($licences)
    {
        $this->licences = $licences;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompetitiveUpgrade()
    {
        return $this->competitiveUpgrade;
    }

    /**
     * @param string $competitiveUpgrade
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setCompetitiveUpgrade($competitiveUpgrade)
    {
        $this->competitiveUpgrade = $competitiveUpgrade;
        return $this;
    }

    /**
     * @return string
     */
    public function getSanMin()
    {
        return $this->sanMin;
    }

    /**
     * @param string $sanMin
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setSanMin($sanMin)
    {
        $this->sanMin = $sanMin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSanMax()
    {
        return $this->sanMax;
    }

    /**
     * @param string $sanMax
     * @return \Pbmedia\Networking4all\ResponseProductDetails
     */
    public function setSanMax($sanMax)
    {
        $this->sanMax = $sanMax;
        return $this;
    }
}
