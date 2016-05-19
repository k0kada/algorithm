<?

  $n = 10;
    while (true) {
    $n_str = (string) $n;
    $binary_n = decbin($n);
    $octal_n = decoct($n);


    if ($n_str == reverse($n_str) && $binary_n == reverse($binary_n) && $octal_n == reverse($octal_n)) {
      echo $n. "\n";
      exit();
    }
    $n++;


  }

  function reverse($n)
  {

    $str = "";
    for ($i = strlen($n) - 1; $i >=  0; $i--) {
      $str .= $n[$i];
    }
    return $str;
  }
?>
