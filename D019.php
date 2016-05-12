<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $a = explode(' ', $N);

    $b = substr($a[0],$a[1]-1,1);
    echo $b;

?>
