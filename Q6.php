<?
//答えが34にならない
  $count = 0;
  for ($i = 2; $i <= 1000; $i += 2) {
    $count += collatz($i);
  }
  var_dump($count);

  function collatz($n)
  {
    $result = $n;
    if ($n % 2 == 0) {
      $result = $n * 3 + 1;
    }

    while (true) {
      if ($result % 2 == 0) {
        $result = $result / 2;
      } elseif ($result % 2 == 1) {
        $result = $result * 3 + 1;
      }
      if ($result == $n) {
        return 1;
      } elseif ($result == 1) {
        return 0;
      }
    }
  }


?>
