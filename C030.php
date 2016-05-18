<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
  $N = trim(fgets(STDIN));
  $Z = explode(" ",$N);
    for($i=0; $i<$Z[0]; $i++){
          $a = trim(fgets(STDIN));
          $b[$i] = explode(" ",$a);

}

for($i=0; $i<$Z[0]; $i++){
$c = 0;
    for($j=0; $j<$Z[1]; $j++){

     if(0 < $j){
         echo " ";
     }

    if($b[$i][$j] <= 127){
        $b[$i][$j] = 0;
        $c++;
    }
    if(128 <= $b[$i][$j]){
        $b[$i][$j] = 1;
        $c++;
    }
      echo $b[$i][$j];
    }


    echo "\n";
}
?>
