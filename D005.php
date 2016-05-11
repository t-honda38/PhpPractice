<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = trim(fgets(STDIN));
    $num = explode(' ', $a);
     $b=$num[0];
     $c=$num[1];
    echo $b.' ';
    for($i=1;$i<=9;$i++){
        $b = $b + $c;
        if($i<9){
        echo $b,' ';
        }
        if($i == 9){
        echo $b;
        }

    }

?>
