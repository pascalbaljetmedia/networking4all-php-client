<?php

namespace Pbmedia\Networking4all;

class Contact
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $initials
     */
    protected $initials = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $gender
     */
    protected $gender = null;

    /**
     * @var string $birthDate
     */
    protected $birthDate = null;

    /**
     * @var string $passportNumber
     */
    protected $passportNumber = null;

    /**
     * @param string $initials
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($initials, $firstName, $lastName)
    {
        $this->initials = $initials;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * @param string $initials
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportNumber()
    {
        return $this->passportNumber;
    }

    /**
     * @param string $passportNumber
     * @return \Pbmedia\Networking4all\Contact
     */
    public function setPassportNumber($passportNumber)
    {
        $this->passportNumber = $passportNumber;
        return $this;
    }
}
