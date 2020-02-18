<?php

$regInt = 1234;

$regString = "Str";
@$regString = "Wojtek";

$bool = false;

define('NEW_CONSTANT',"Hello Wojtek");

var_dump($regInt);
var_dump($regString);
var_dump($bool);
var_dump(NEW_CONSTANT);
echo NEW_CONSTANT;

echo is_int($regInt);
echo  is_bool($bool);
echo  is_float($regInt);
echo  is_string(NEW_CONSTANT);
defined("CHECK_CONSTANT");

function myfunction($name = "World"){
    echo "Hello\n";
    echo $name;
    echo "\n";
}

function getAuthor(){
    return "Autor Wojtek";
}

myfunction();

myfunction("Wojtek");

$piotrek = "Piotrek";
myfunction($piotrek);

myfunction(getAuthor());

function getAuthor2(){
    echo "Autor Wojtek";
}

$autorWojtek = "getAuthor2";
$autorWojtek();


$authorName = "Wojciech";

function setAuthorName()
{
    global $authorName;
    $authorName = "Piotr";

}

setAuthorName();
echo $authorName;

$animal = 'kotek';
$sampleString = "Wlazł $animal na płotek i mruga.";
echo $sampleString;

$misc='St.Patrick\'s Day\n';
echo $misc;

$var = 2;
echo "{$var}nd place";
echo "\n";
echo $var."nd place";

echo <<<EOT
Wojtek
Asia
Olek
Nina
EOT;

print  ("Wlazł kotek na płotek i mruga.\n");
echo "Wojtek ", "Asia ", "Olek ", "Nina ";
$quote = "Wlazł kotek na płotek i mruga.\n";
print strtoupper($quote);
print strlen($quote)."\n";
$replaced =  str_replace("kotek","piesek",$quote, $counter);
echo $replaced;
echo $counter."\n";
echo strpos($quote,"kotek"."\n");
echo substr($replaced,-7,17);
$repArray = str_split($replaced,5);
print_r($repArray);

$authors = array("Wojtek", "Asia", "Olek", "Nina");
print_r($authors);
print $authors[1];
print "\n";
$names = ["Wojtek", "Asia", "Olek", "Nina"];
print_r($names);
print  $names[1];
$associativeAuthors = array(
    "w" => "Wojtek",
    "a" => "Asia",
    "o" => "Olek",
    "n" => "Nina");
print_r($associativeAuthors);
print $associativeAuthors["o"];

$associativeNames = [
    "w" => "Wojtek",
    "a" => "Asia",
    "o" => "Olek",
    "n" => "Nina",
];
print_r($associativeNames);
print $associativeNames["o"];
print "\n";

$keyArray = "a";
if (array_key_exists($keyArray, $associativeNames)) {
    print $associativeNames[$keyArray];
}
print "\n";
$value = "Asia";
echo in_array($value, $associativeNames);
array_push($associativeNames, "Piotrek");
$associativeNames2[] = "Maja";
$associativeNames2[] = "Ala";
$associativeNames2[] = "Marcela";


print_r($associativeNames);
array_pop($associativeNames);
print_r($associativeNames);

print_r($associativeNames);

//unset($associativeNames2[0], $associativeNames2[1]);
asort($associativeNames);
print_r($associativeNames);

echo count($associativeNames2) . "\n";

//for ($i=1;$i<=5;$i++){
//    echo $i;
//}

foreach ($associativeNames as $key => $name) {
    echo $name ."({$key})". "\n";
}