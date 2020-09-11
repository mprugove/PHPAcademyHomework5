<?php

    $name = "matija";
    $nameArr = str_split($name);
    $alphasArr = range('a','z');
    $alphasCount = count($nameArr);


    for($x = 0; $x < $alphasCount; $x++) {
        foreach($alphasArr as $letter) {
            if($letter === $nameArr[$x] && $letter === $nameArr[$alphasCount - 1 -$x]) {
                echo "<b><u>" . $letter . "</u></b>";
            } elseif ($letter === $nameArr[$alphasCount - 1 -$x]) {
                echo "<u>" .$letter . "</u>";
            } elseif ($letter === $nameArr[$x]) {
                echo "<b>" . $letter . "</b>";
            } else {
                echo $letter;
            }
        } echo "<br>";
    }