<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
 $N = trim(fgets(STDIN));
$Z=0;
    for($i=0; $i<$N; $i++){
          $a = trim(fgets(STDIN));
          $b = explode(" ",$a);
          $c = str_split($b[0]);
          $d = str_split($b[1]);
          $E = 0;

          if(strlen($b[0])==strlen($b[1])){
          for($j=0; $j<count($c);$j++){
              if($c[$j]==$d[$j]){
                  $E++;
              }

            }

          }

          if($b[0]==$b[1]){
             $Z = $Z + 2;
          }
          if(strlen($b[0]) != strlen($b[1]) ){
              $Z = $Z + 0;
          }
          if(strlen($b[0]) == strlen($b[1]) && $E == count($c)-1 ){
              $Z = $Z + 1;
          }
          if(strlen($b[0]) == strlen($b[1]) && $E < count($c)-1){
              $Z = $Z + 0;
          }

    }
    echo $Z."\n";
?>
