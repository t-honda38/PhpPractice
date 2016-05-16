<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));
    $Z = str_split($N);
    for($i=0;$i<strlen($N);$i++){
        if($Z[$i] == 'A'){
            $Z[$i] =  '4';
        }
        if($Z[$i] == 'E'){
            $Z[$i] = '3';
        }
        if($Z[$i] == 'G'){
        $Z[$i] =  '6';
        }
        if($Z[$i] == 'I'){
            $Z[$i] = '1';
        }
        if($Z[$i] == 'O'){
            $Z[$i] =  '0';
        }
        if($Z[$i] == 'S'){
           $Z[$i] = '5';
        }
        if($Z[$i] == 'Z'){
        $Z[$i] = '2';
        }
        echo $Z[$i];
}

?>
