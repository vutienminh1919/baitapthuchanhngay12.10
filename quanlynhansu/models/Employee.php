<?php

class Employee
{
    private $fristname;
    private $lastname;
    private $birthDate;
    private $address;
    private $jobTitle;

    /**
     * @param $fristname
     * @param $lastname
     * @param $birthDate
     * @param $address
     * @param $jobTitle
     */
    public function __construct($fristname, $lastname, $birthDate, $address, $jobTitle)
    {
        $this->fristname = $fristname;
        $this->lastname = $lastname;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->jobTilte = $jobTitle;
    }

    /**
     * @return mixed
     */
    public function getFristname()
    {
        return $this->fristname;
    }

    /**
     * @param mixed $fristname
     */
    public function setFristname($fristname): void
    {
        $this->fristname = $fristname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTilte;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setJobTitle($jobTitle): void
    {
        $this->jobTilte = $jobTitle;
    }

}