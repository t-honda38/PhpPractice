<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $N = trim(fgets(STDIN));
    $Z = explode(" ",$N);
    $X = trim(fgets(STDIN));
    for($i=0; $i<$X; $i++){
         $a = trim(fgets(STDIN));
             $b = explode(" ",$a);

             $c = pow($b[0]-$Z[0],2);
             $d = pow($b[1]-$Z[1],2);

             if(pow($Z[2],2) <= $d+$c && $d+$c <= pow($Z[3],2)){
                 echo "yes"."\n";
             }
             else{

             echo "no"."\n";
             }
    }
?>
