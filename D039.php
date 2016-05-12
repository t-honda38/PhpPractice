<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    for($i=0;$i<3;$i++){

    $N[$i] = trim(fgets(STDIN));

    }
    if($N[0] == $N[1] && $N[1] == $N[2]){
        echo YES;
    }
    else{
        echo NO;

    }

?>
