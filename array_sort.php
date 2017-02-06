<?php

// この配列を昇順(小さい順)に並び替えてください。
$array = [1, 30, 14, 23, 33, 40, 120];
/********ここにコードを追加***************/

$swap = 0;

for($i = 1; $i <= sizeof($array); i++) {
  if($array[$i] > $array[$i + 1]) {
    $swap = $array[$i];
    $array[$i] = $array[$i + 1];
    $array[$i + 1] = $swap;
  }

echo $array;

}


/********ここまでコードを追加***************/
// ここから下は、変更しないでください。
foreach ($array as $value) {
    echo $value."\n";
}
