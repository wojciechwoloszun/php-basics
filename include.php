<?php

include 'Person.php';
include_once 'Author.php';

$myObject = new Person();


print Person::AVG_LIFE_SPAN;

$myObject->setFirstName("Kowal");
echo $myObject->getFirstName().PHP_EOL;
echo $myObject->getFirstName();


$author = new Author("Jas", "Fasola", 2010);
print $author->getCompleteName();
$author->getPenName();