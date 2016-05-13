(x-a)^+(y-b)^=>r^<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
  $N = trim(fgets(STDIN));
    $Z = explode(' ',$N);
    $W = trim(fgets(STDIN)); //木の数
    for($i=0;$i<$W;$i++){
         $X = trim(fgets(STDIN));
          $Y = explode(' ',$X);
          $a = pow($Y[0]-$Z[0],2);
          $b = pow($Y[1]-$Z[1],2);
          $c = $a+$b;
          $R = pow($Z[2],2);
          if($R <= $c){
              echo "silent"."\n";
          }
          else{
              echo "noisy"."\n";
          }
    }
?>
