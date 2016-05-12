<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));

    $c = $b / $a;
    $d = $b % $a;

    if($d == 0){
        echo (int)$c;
    }
    else{
    echo (int)$c+1;

    }
?>
