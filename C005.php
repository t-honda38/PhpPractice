<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $N = trim(fgets(STDIN));

    for($i=0;$i<$N;$i++){
     $Z = 'True';
        $a[$i] = trim(fgets(STDIN));
        $b = substr_count($a[$i],'.');
        $c = explode(".",$a[$i]);
        $d = count($c);
        $E = empty($c);

      for($j=0; $j < $d; $j++){

             if($c[$j] == []){
            $Z = 'False';
        }
      if($d != 4 ){
          $Z = 'False';

      }
      if($b != 3){
          $Z = 'False';
      }
          if($c[$j] == []){
           $Z = 'False';
      }
          if($c[$j] > 255 || $c[$j] < 0 ){
               $Z = 'False';
      }
    }
    echo $Z. "\n";
    }
?>
