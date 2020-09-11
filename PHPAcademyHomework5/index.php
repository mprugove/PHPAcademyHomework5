<?php
# Display Errors
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_alter('display_startup_errors', TRUE);

require 'classes/AbstractClass/AbstractClass.php';
require 'classes/HomeworkClass1/HClassOne.php';
require 'classes/HomeworkClass1/HClassTwo.php';
require 'classes/HomeworkClass2/HClassOne.php';
require 'classes/HomeworkClass2/HClassTwo.php';
require 'classes/Prefix/Prefix.php';
require 'classes/App.php';

use classes\App;
use classes\Prefix\Prefix;
use classes\HomeworkClass1\HClassOne as ClassOne;
use classes\HomeworkClass1\HClassTwo as ClassTwo;
use classes\HomeworkClass2\HClassOne as ClassThree;
use classes\HomeworkClass2\HClassTwo as ClassFour;

$year = 2020;
$month = rand(1,12);
$day = rand(1,31);
$randomDate = $day. '/' . $month. '/'. $year;

$prefixDate = new Prefix;
$prefixDate->setDate($randomDate);
//echo $prefixDate->getDate();

$foldersArray = ['HomeworkClass1', 'HomeWorkClass2'];
$randomFolders = array_rand($foldersArray, 1);


$filesArray = ['HClassOne', 'HClassTwo'];
$randomFiles = array_rand($filesArray, 1);

$where = 'classes\\' . $foldersArray[$randomFolders] . '\\' . $filesArray[$randomFiles];

$object = new $where;

echo App::getSomething($prefixDate, $object);

echo '<br>';
$name = new Prefix;
$name->setName('Pero');
echo 'Added by ' . $name->getName();
