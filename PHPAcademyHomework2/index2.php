<?php

    $alphasArr = range('a', 'z');
    $alphasCount = count($alphasArr);
    $start = 16;

    for($i = 0; $i < $alphasCount; $i++) {
        foreach($alphasArr as $letter => $keyLetter) {
            if(abs(- $start + $i) === $letter) {
                echo "<b>" . $keyLetter . "</b>";
            } else {
                echo $keyLetter;
            }
        } echo "<br>";
        array_push($alphasArr, array_shift($alphasArr));
    }

