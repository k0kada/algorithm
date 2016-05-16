<?
  $arr = [12,31,1,3,3,4,3,11,5,6];
  var_dump(bucketSort($arr));

  function bucketSort($arr) {
    $bucket_arr = [];
    for ($b_i = 0; $b_i <= max($arr); $b_i++) {
      $bucket_arr[$b_i] = [];
      for ($i = 0; $i < count($arr); $i++) {
        if ($b_i == $arr[$i]) {
          array_push($bucket_arr[$b_i], $arr[$i]);
        }
      }
    }
    return calcBucket($bucket_arr);
  }

  function calcBucket($bucket_arr)
  {
    global $arr;
    $result = [];
    for ($b_i = 0; $b_i <= max($arr); $b_i++) {
      if ($bucket_arr[$b_i] != array() && isset($bucket_arr[$b_i])) {
        foreach ($bucket_arr[$b_i] as $bucket) {
          array_push($result, $bucket);
        }
      }
    }
    return $result;
  }




?>
