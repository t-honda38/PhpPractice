<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    function between($beg, $end, $str) {

      $ret_array = array();

      $array = explode($beg,$str);

      foreach($array as $item) {

        $pos = strpos($item,$end);

        if( false !== $pos ) {

          $ret_array[] = substr($item,0,$pos);

        }

      }

      return( $ret_array );

    }

    $N = trim(fgets(STDIN));
    $Z = explode(' ',$N);
    $W = trim(fgets(STDIN));

    $X = $Z[0];
    $Y = $Z[1];

     $a = between($X,$Y,$W);
    $b=count($a);

    for($i=0;$i<$b;$i++){
        if($a[$i] == ""){
        echo "<blank>"."\n";

        }
        else{
        echo $a[$i]."\n";
        }

    }



?>
