<?
  magicSquare();

  function magicSquare()
  {
    $total = [];
    for ($i = 1; $i <= 9; $i++) {
      for ($j = 1; $j <= 9; $j++) {
        for ($k = 1; $k <= 9; $k++) {
          $total[$i][$j][$k] += ($i + $j + $k);
        }
      }
    }
    var_dump($total);
  }
?>
