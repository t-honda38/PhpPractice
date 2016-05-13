<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $Z = explode(' ',$N);
    $a = $Z[1]*2;

    for($i=0;$i<$Z[0];$i++){
    $W = trim(fgets(STDIN));
    $X = explode(' ',$W);

    if($a <= $X[0] && $a <= $X[1] && $a <= $X[2]){
        echo ($i+1) . "\n";
    }

    }
?>
