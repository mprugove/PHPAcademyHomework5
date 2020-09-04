<?php

    $alphas = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,r,s,t,u,v,w,x,y,z";
    $alphasArr = explode(',', $alphas);
    $rowNum = count($alphasArr);
    $start = 16;

    for($i = 0; $i < $rowNum; $i++) {
        foreach($alphasArr as $letter => $keyLetter) {
            if(abs(- $start + $i) === $letter) {
                echo "<b>" . $keyLetter . "</b>";
            } else {
                echo $keyLetter;
            }
        } echo "<br>";
        array_push($alphasArr, array_shift($alphasArr));
    }