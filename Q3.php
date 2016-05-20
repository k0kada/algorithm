<?
  $N = 100;
  $card = array_fill(0, 100, 0);

  for ($i = 2; $i < $N; $i++) {
    $j = $i - 1;
    while ($j < $N) {
      $card[$j] = reverseCard($card[$j]);
      $j += $i;
    }
  }
 var_dump($card);

  function reverseCard($num)
  {
    if ($num == 0) {
      return 1;
    } else {
      return 0;
    }
  }
?>
