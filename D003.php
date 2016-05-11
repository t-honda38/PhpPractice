<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $N = $input_lines;
    for($i=1; $i<10; $i++){

        if($i<9){
        echo $N * $i . ' ';
        }
        else if($i==9){
        echo $N * $i;
        }

    }
?>
