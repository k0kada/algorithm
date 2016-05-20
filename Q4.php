<?
  var_dump(cut(3, 20, 1));
  var_dump(cut(5, 100, 1));

  var_dump(cut2(3, 20));
  var_dump(cut2(5, 100));



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

  function cut2($m, $n) {
    $num = 0;
    $cut = 1;

    while ($n > $cut) {
      if ($cut < $m) {
        $cut += $cut;
        $num++;
      } else {
        $cut += $m;
        $num++;
      }
    }
    return $num;
  }
?>
