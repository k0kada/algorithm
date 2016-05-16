<?
  $n = 10;
  var_dump(fibonacci($n));

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

?>
