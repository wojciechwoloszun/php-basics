<?php

class Author extends Person
{
    public $penName = "Author";

    /**
     * @return string
     */
    public function getPenName(): string
    {
        return $this->penName;
    }

    public function getCompleteName()
    {
        return $this->getFirstName() . " " . $this->getLastName() . " " . $this->getPenName() . PHP_EOL;
    }
}
