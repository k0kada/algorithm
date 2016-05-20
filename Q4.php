<?
  var_dump(cut(3, 20, 1));
  var_dump(cut(5, 100, 1));

  function cut($m, $n, $cut, $num = 0) {
    if ($cut >= $n) {
      return $num;
    } elseif ($cut < $m) {
      $num++;
      return cut($m, $n, $cut * 2, $num);
    } else {
      $num++;
      return cut($m, $n, $cut + $m, $num);
    }
  }
?>
