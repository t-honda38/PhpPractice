<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $num = explode(' ', $N);
    $a=$num[0];
    $b=$num[1];

    if($b =='cm'){

    echo $a*10;
    }
    if($b =='m'){

    echo $a*100*10;
    }
    if($b =='km'){

    echo $a*1000*100*10;
    }


?>
