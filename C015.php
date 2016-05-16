<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $Z = 0;

    for($i=0;$i<$N;$i++){
    $W = trim(fgets(STDIN));
    $X = explode(' ',$W);
    $a = $X[0]-10;
    $b = $X[0]-20;
           if($X[0] == 3 || $a == 3 || $b == 3  || 30 <= $X[0]){
               $Z = $Z + floor($X[1]*0.03);}
               else if($X[0] == 5 || $a==5 || $b == 5){
               $Z = $Z + floor($X[1]*0.05);
               }
               else{
                   $Z = $Z + floor($X[1]*0.01);
               }
    }
    echo $Z;
?>
