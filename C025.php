<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
  $N = trim(fgets(STDIN));
  $Z = trim(fgets(STDIN));
  $c = 0;
  $d = 0;
  $e = 0;
    for($i=0; $i<$Z; $i++){
         $a = trim(fgets(STDIN));
         $b[$i] = explode(" ",$a);
    }
    $j=0;
    for($i=0; $i<$Z; $i++){

    if($b[$j][0] == $b[$i][0]){
        $c = $c + $b[$i][2];
    }

    if($b[$j][0] != $b[$i][0]){
        $j = $i;
        $e = $e + ceil($c/$N);
        $c = 0;
        $i--;
    }

    }
    $e = $e + ceil($c/$N);
    echo $e;

?>
