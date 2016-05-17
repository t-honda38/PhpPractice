<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
 $N = trim(fgets(STDIN));
 $j=0;
 $a = array();
 $b = array();
 $c = array();
 $d = array();
for($i=0; $i<$N; $i++){

     $X = trim(fgets(STDIN));
     $Z = explode(" ",$X);
     $a[$j]=$Z[0];
     $b[$j]=$Z[1];
     $c[$j]=$Z[2];
     $d[$j]=$Z[3];
     $j++;
}
echo $a[0]." ";
echo $b[$j-1]." ";
echo max($c)." ";
echo min($d)."\n";
?>
