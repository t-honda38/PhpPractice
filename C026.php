<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $N = trim(fgets(STDIN));
   $Z = explode(" ",$N);
   $W = array();
   $j=0;
   //var_dump($Z[0]);
    for($i=0; $i<$Z[0]; $i++){
          $a = trim(fgets(STDIN));
          $b[$i]= explode(" ",$a);

          if($Z[1]-$Z[2] <= $b[$i][1] && $b[$i][1] <= $Z[1]+$Z[2]){
              $j++;

          }
          else{
              $b[$i][0] = 0;

          }
    }
        // var_dump($W);
     if($j == 0 && $i = $Z[0]-1){
          echo "not found";
          exit;
}






for($i=0; $i<$Z[0]; $i++){
        $K[$i] = $b[$i][0];

    }
       $E = max($K);


       $F = array_search($E,$K);
       echo $F+1;
?>
