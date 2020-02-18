<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn;

    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($tempFirstName)
    {
        $this->firstName = $tempFirstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getYearBorn(): string
    {
        return $this->yearBorn;
    }

    /**
     * @param string $yearBorn
     */
    public function setYearBorn(string $yearBorn): void
    {
        $this->yearBorn = $yearBorn;
    }

    public function getFullName(){
        return $this->getFirstName()." ".$this->getLastName().PHP_EOL;
    }


}
