<?
  $n = 5;
  var_dump(fibonacci($n));

  $memp = [];
  var_dump(recursive_fib_arr($n));

  function fibonacci($n)
  {
    $result = [];
    $a = 0;
    $b = 1;
    for ($i = 0; $i <= $n; $i++) {
      switch ($i) {
      case 0:
        $f = 0;
        break;
      case 1:
        $f = 1;
        break;
      default:
        $f = $a + $b;
        $a = $b;
        $b = $f;
        break;

      }
      $result[$i] = $f;
    }
      return $result;
  }


  function recursive_fib_arr($n) {
    $result = [];
    for ($i = 0; $i <= $n; $i++) {
      $result[$i] = recursive_fib($i);
    }
    return $result;
  }

  function recursive_fib($n)
  {
    global $memo;

    switch ($n) {
    case 0:
      return $memo[$n] = 0;
    case 1:
      return $memo[$n] =  1;
    default:
      return $memo[$n] = recursive_fib($n - 1) + recursive_fib($n - 2);
    }
  }
?>
