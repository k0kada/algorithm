<?
  $arr = [112,21,2,14,1,2,1,212];
  var_dump(quickSort(0, count($arr) - 1));

  function quickSort($start_i, $end_i)
  {
    global $arr;
    if ($start_i == $end_i) {
      return $arr;
    }
    $pivot_i = pivot($start_i, $end_i);
    if ($pivot_i != -1) {
      $partition_i = partition($start_i, $end_i, $arr[$pivot_i]);
      quickSort($start_i, $partition_i - 1);
      quickSort($partition_i, $end_i);
    }
    return $arr;
  }

  //最初の値と次の値を比較して、大きい方をpivotにする
  function pivot($start_i, $end_i)
  {
    global $arr;
    $next_i = $start_i + 1;
    while ($next_i <= $end_i && $arr[$start_i] == $arr[$next_i]) {
      $next_i++;
    }
    if ($next_i > $end_i) {
      return -1;
    }
    if ($arr[$start_i] > $arr[$next_i]) {
      return $start_i;
    }
    return $next_i;
  }

  function partition($start_i, $end_i, $pivot)
  {
    global $arr;
    $s_i = $start_i;
    $e_i = $end_i;

    while ($s_i <= $e_i) {
      while ($s_i <= $end_i && $arr[$s_i] < $pivot) {
        $s_i++;
      }
      while ($e_i >= $start_i && $arr[$e_i] >= $pivot) {
        $e_i--;
      }

      if ($s_i > $e_i) {
        break;
      }

      $tmp = $arr[$s_i];
      $arr[$s_i] = $arr[$e_i];
      $arr[$e_i] = $tmp;
      $s_i++;
      $e_i--;
    }
    return $s_i;
  }


?>
