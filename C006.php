<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！   round(1.95583, 2);
    $N = trim(fgets(STDIN));
    $a = explode(" ",$N);

    $Z = trim(fgets(STDIN));
    $ci = explode(" ",$Z);

    for($i=0; $i<$a[1];$i++){
        $b = trim(fgets(STDIN));
        $c = explode(" ",$b);
        $d =0;
         for($j=0; $j<$a[0];$j++){
             $d = $d + ($c[$j]*$ci[$j]);
         }
    $e[$i] = $d;
    }

rsort($e,SORT_NUMERIC);

 for($i=0; $i<$a[2];$i++){
 echo round($e[$i])."\n";
}
?>
