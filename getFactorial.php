<form action="" method="POST">
    <input type="number" name="fact">   <!-- Only numbers allowed, getFactorial only accept int!! -->
    <button>Submit</button>
</form>
<?php

function getFactorial(int $i): int
{
    if ($i <= 1) {
        return 1;
    } else {
        return $i * getFactorial($i - 1);
    }
}

$fact = $_POST['fact'];
if (isset($_POST['fact']) && $_POST['fact'] != false) {
    if ($fact > 21) {
        echo 'DARN! That\'s way too much over PHP max number, try with numbers below 21 :)', '<br>';
    } elseif ($fact <= 0) {
        echo 'DARN! Please type number above 0!', '<br>';
    }
    echo 'Factorial of ' . $fact . ' is ' . getFactorial($fact);
} else {

    echo "Please type a number and get his factorial";

}


