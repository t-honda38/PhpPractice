<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = 0;
  for($i=0;$i<7;$i++){

    $N[$i] = trim(fgets(STDIN));
    if($N[$i] <=30 ){
        $a = $a +1;
    }

    }
    echo $a;
?>
