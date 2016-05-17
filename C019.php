<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));

    for($i=0;$i<$N;$i++){
     $a[$i] = trim(fgets(STDIN));
    $d = array();
    for($j = 2 ; $j <= $a[$i];$j++){

    if($a[$i] % $j  == 0){
    $d[$i] = $d[$i] + ($a[$i] / $j);
    }

    }

    if($d[$i]==$a[$i]){
        echo "perfect"."\n";
    }
    else if(abs($a[$i]-$d[$i]) == 1 ){
        echo "nearly"."\n";
    }
    else{
        echo "neither"."\n";
    }
    }

?>
