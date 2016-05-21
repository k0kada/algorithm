<?
  var_dump(pattern());

  function pattern() {
    $count = 0;
    for ($coin_500 = 0; $coin_500 <= 2; $coin_500++) {
      for ($coin_100 = 0; $coin_100 <= 10; $coin_100++) {
        for ($coin_50 = 0; $coin_50 <= 15; $coin_50++) {
          for ($coin_10 = 0; $coin_10 <= 15; $coin_10++) {
            if ($coin_500 + $coin_100 + $coin_50 + $coin_10 > 15) {
              break;
            }
            if (1000 == 500 * $coin_500 + 100 * $coin_100 + 50 * $coin_50 + 10 * $coin_10) {
              $count++;
            }
          }
        }
      }
    }
    return $count;
  }

 
?>
