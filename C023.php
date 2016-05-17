<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
  $N = trim(fgets(STDIN));
  $Z = explode(" ",$N);
  $X = trim(fgets(STDIN));
  for($i=0; $i<$X; $i++){
      $a = trim(fgets(STDIN));
      $b = explode(" ",$a);
      $M=0;
       for($c=0; $c<count($b); $c++){

       for($j=0; $j<count($b); $j++){

          if($b[$j] == $Z[$c]){
           $M++;
          }
      }

      }
      echo $M."\n";
  }
?>
