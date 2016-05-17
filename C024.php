<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
       $c = 0;
       $d = 0;
    for($i=0; $i<$N; $i++){
         $a = trim(fgets(STDIN));
      $b = explode(" ",$a);

      if($b[0] == "SET" && $b[1] == 1){
          $c = $b[2];
      }
      if($b[0] == "SET" && $b[1] == 2){
          $d = $b[2];
      }

       if($b[0] == "ADD"){
           $d = $c + $b[1];
      }

       if($b[0] == "SUB"){
      $d = $c - $b[1];
       }


    }
  echo $c." ". $d;
?>
