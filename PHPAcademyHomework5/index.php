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
require 'classes/HomeworkClass3/HClassOne.php';
require 'classes/HomeworkClass3/HClassTwo.php';
require 'classes/Interfaces/Interfaces.php';
require 'classes/Prefix/Prefix.php';
require 'classes/App.php';

use classes\App;
use classes\Prefix\Prefix;
use classes\Interfaces\GetInterface;
use classes\HomeworkClass1\HClassOne as ClassOne;
use classes\HomeworkClass1\HClassTwo as ClassTwo;
use classes\HomeworkClass2\HClassOne as ClassThree;
use classes\HomeworkClass2\HClassTwo as ClassFour;
use classes\HomeworkClass3\HClassTwo as ClassFive;
use classes\HomeworkClass3\HClassTwo as ClassSix;

$year = 2020;
$month = rand(1,12);
$day = rand(1,31);
$randomDate = $day. '/' . $month. '/'. $year;

$prefixDate = new Prefix;
$prefixDate->setDate($randomDate);
//echo $prefixDate->getDate();

//$foldersArray = [
//    'classes\HomeworkClass1',
//    'classes\HomeworkClass1',
//    'classes\HomeworkClass2',
//    'classes\HomeworkClass2'
//];

$foldersArray = ['HomeworkClass1', 'HomeworkClass2', 'HomeworkClass3'];
$randomFolders = shuffle($foldersArray);
$filesArray = ['HClassOne', 'HClassTwo'];
$randomFiles = shuffle($filesArray);

$slashFolder = addslashes('classes\\');
$folder = stripslashes($slashFolder);
$separator = addslashes('\\');
$sep = stripslashes($separator);
$where = $folder . $foldersArray[$randomFolders] . $sep . $filesArray[$randomFiles];

$object = new $where;

echo App::getSomething($prefixDate, $object);
