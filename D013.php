<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $a = explode(' ', $N);

    (int)$b = $a[0] / $a[1];
    $c = $a[0] % $a[1];
    echo (int)$b.' '.$c;


?>
