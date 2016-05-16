<?
		$arr = [3,5,1,2,7,0,8,14,3];
		$sorted_arr = bubble_sort($arr);
		var_dump($sorted_arr);

		function bubble_sort($arr)
		{
			for ($i = 0; $i < count($arr); $i++) {
				for ($j = 1; $j < count($arr); $j++ ) {
					if ($arr[$j - 1] > $arr[$j]) {
						$tmp = $arr[$j];
						$arr[$j] = $arr[$j - 1];
						$arr[$j - 1] = $tmp;
					}
				}
			}
			return $arr;

		}
?>
