<?
  $n = (string) 1000;
  $array = ["*", "/", "+", "-", ""];
  while ($n <= 9999) {
    for ($i = 0; $i < count($array); $i++) {
      for ($j = 0; $j < count($array); $j++) {
        for ($k = 0; $k < count($array); $k++) {
          if (
            ($array[$i] == '/' && $n[1] == '0')
            || ($array[$j] == '/' && $n[2] == '0')
            || ($array[$k] == '/' && $k[3] == '0')
          ) {
            break;
          }
          $str = "$n[0]$array[$i]$n[1]$array[$j]$n[2]$array[$k]$n[3]";
          $a =  eval("return {$str};");


          if ($a == strrev($n)) {
            var_dump($a);
            exit();
          }
        }
      }
    }
    $n++;
  }

?>
