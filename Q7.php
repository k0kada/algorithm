<?
  date_default_timezone_set('asia/tokyo');
  $date = date('Ymd', strtotime('1964-10-10'));
  $result = [];

  while ($date <= date('Ymd', strtotime('20200724'))) {
    $binary = (string) decbin($date);
    $reversed_binary = reverse($binary);
    $decimal = bindec($reversed_binary);

    if ($date == $decimal) {
      $result[] = $date;
    }
    $date = date('Ymd', strtotime($date. '+1 days'));
  }
  var_dump($result);

  function reverse($str)
  {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
      $reversed .= $str[$i];
    }
    return $reversed;
  }
?>
