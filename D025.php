<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $a = strlen($N);
    $b = '0';
    $c = '00';
    if($a==2){
    $b .= $N;

    echo $b;
    }
    else if($a==1){
    $c .= $N;

    echo $c;
    }
    else{

    echo $N;
    }
?>
