<?php

function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}

 $data = [2, 4, 8, 8, 9, 10, 14, 20, 100, 101, 4, 5] ;

print_r(bubble_sort($data));


// ==================================

function star ($star){
	// $star=5;
		for($a=$star;$a>0;$a--){
		for($b=$star;$b>=$a;$b--){
			echo "*";
		}
	  echo "\n";
	  }
	}
	  star(9);
	echo PHP_EOL;
	// =====================================
	function star2 ($star){
	// $bintang=5;
		for($a=1; $a<=$star; $a++){
		for($c=$star; $c>=$a; $c--){
			echo "*";
		}
		echo "\n";
		}
	}
	star2(9);