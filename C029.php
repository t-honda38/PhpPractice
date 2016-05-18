<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
  $N = trim(fgets(STDIN));
  $Z = explode(" ",$N);
    for($i=0; $i<$Z[0]; $i++){
          $a = trim(fgets(STDIN));
          $b[$i] = explode(" ",$a);

}
     $f = 0;
 for($i=0; $i<$Z[0]-($Z[1]-1); $i++){
     $e = 0;

     for($j=$f; $j<$Z[1]+$f; $j++){
         $e = $e + ($b[$j][1]);
     }
      $c[$i] = $e;
      $f++;
}

$d = min($c);


//$j = 0;
for($i=0; $i<count($c); $i++){

   if($d == $c[$i]){
       echo $i+$b[0][0]." ";
       echo $i+$b[0][0]+$Z[1]-1 . "\n";
       exit;
         // $W[$j] = $i;
          //$j++;
     }
}
//$X = $W[0];

?>
