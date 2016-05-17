<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
     //var_dump($N);
     $b =array();
    for($i=0;$i<$N;$i++){
     $a = trim(fgets(STDIN));
     $b[$i] = explode(' ',$a);
    //var_dump($b[$i]);
    }

    $Z = trim(fgets(STDIN));
    //var_dump($Z);
    $d= array();
    for($J=0;$J<$Z;$J++){
     $c = trim(fgets(STDIN));
     $d[$J] = explode(' ',$c);
      //var_dump($d[$i]);
    }
    $W = array();
    $e =0;
     for($i=0;$i<$N;$i++){

      for($j=0;$j<$Z;$j++){

        if($d[$j][0] == $b[$i][0]){
            if($d[$j][1]>$b[$i][1]){
              $W[$i] =floor( $d[$j][1]/$b[$i][1]);
               $e++;
            }
        }
      }
  }
 if($e==$N){
      $M = min($W);
      echo $M."\n";
 }
 else{
      echo "0"."\n";
 }

?>
