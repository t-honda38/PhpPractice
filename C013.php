<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $Z = trim(fgets(STDIN));
       for($i=0;$i<$Z;$i++){
       $a = trim(fgets(STDIN));
       $b = substr_count($a,$N);
       if($b<1){
           echo $a."\n";
       $j = $j + 1;
       }

       }
       if($j < 1){
             echo "none"."\n";
       }
?>
