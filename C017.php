<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $X = explode(' ',$N);

    $Z = trim(fgets(STDIN));

    for($i=0;$i<$Z;$i++){
        $a = trim(fgets(STDIN));
        $b = explode(' ',$a);
        if($X[0]>$b[0]){
            echo "High"."\n";
        }
        if($X[0]<$b[0]){
            echo "Low"."\n";
        }
        if($X[0]==$b[0] && $X[1]<$b[1]){
            echo "High"."\n";
        }
        if($X[0]==$b[0] && $X[1]>$b[1]){
        echo "Low"."\n";

        }
        if($X[0]==$b[0] && $X[1]==$b[1]){
        echo "Low"."\n";
        }
    }
?>
