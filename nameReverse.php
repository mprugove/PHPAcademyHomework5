<form action='' method='POST'>
    <input type='text' name='input'>
    <button>Submit</button>
</form>
<?php

function stringReverse($string)
{
    $getLength = strlen($string);
    $n = $getLength - 1;
    while ($n >= 0) {
        echo $string[$n];
        $n--;
    }
}

$reverse = $_POST['input'];
if (isset($_POST['input'])) {
    echo 'Your input : ' . $reverse . '<br>';
    echo 'Your input reversed : ';
    echo stringReverse($reverse);
}
