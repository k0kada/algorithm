<?
//答えあってない
  $N = 3;
  $count = 0;
  move([[0, 0]]);


  function move($log)
  {
    global $N, $count;
    if (count($log) == $N + 1) {
      var_dump($count);
      return $count;
    }

    $move_arr = [[0, 1], [0, -1], [1, 0], [-1, 0]];

    foreach ($move_arr as $move) {
      $next_pos = [$log[-1][0] + $move[0], $log[-1][1] + $move[1]];
      if (!in_array($next_pos, $log)) {
        $log[] = $next_pos;
        $count++;
        move($log);
      }
    }
  }

?>
