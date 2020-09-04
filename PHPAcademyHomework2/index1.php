<?php

    $name = "matija";
    $nameArr = str_split($name);
    $alphas = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,r,s,t,u,v,w,x,y,z";
    $alphasArr = explode(',', $alphas);
    $rowNum = count($nameArr);


    for($i = 0; $i < $rowNum; $i++) {
        foreach($alphasArr as $letter) {
            if($letter === $nameArr[$i] && $letter === $nameArr[$rowNum - 1 -$i]) {
                echo "<b><u>" . $letter . "</u></b>";
            } elseif ($letter === $nameArr[$rowNum - 1 -$i]) {
                echo "<u>" .$letter . "</u>";
            } elseif ($letter === $nameArr[$i]) {
                echo "<b>" . $letter . "</b>";
            } else {
                echo $letter;
            }
        } echo "<br>";
    }