<?

  $n = 11;
  while (true) {
    $n_str = (string) $n;
    $binary_n = decbin($n);
    $octal_n = decoct($n);

    if ($n_str == strrev($n_str) && $binary_n == strrev($binary_n) && $octal_n == strrev($octal_n)) {
      echo $n. "\n";
      break;
    }
    //２進数の場合回文になるのは、右が必ず1になる
    $n += 2;


  }
?>
