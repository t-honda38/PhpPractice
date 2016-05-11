<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
     $num = explode(' ', $input_lines);
     $a=$num[0];
     $b=$num[1];

        if($a>$b){
            echo $a;
        }
        else if($a<$b){
            echo $b;
    }
    else if($a==$b){
        echo 'eq';
    }
