<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
      $N = $input_lines;
    $mozi = 'Hello'.' ';

    for($i=1 ; $i<=$N; $i++){
        $a[$i]=trim(fgets(STDIN));

            if($i < $N){
        $mozi .= $a[$i]. ',';
        }

    else if($i == $N){
        $mozi .= $a[$i] . '.';
    }
    }
    echo $mozi;
?>
