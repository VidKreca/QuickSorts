<?php 

function partition($arr, $bottom, $top) {
	$m = $arr[($bottom+$top) / 2];
	$l = $bottom-1; 
	$r = $top;

	while (true) {
		do {
			$l++;
		} while ($arr[$l] < $m && $l <= $top);

		do {
			$r--;
		} while($arr[$r] > $m && $r >= $bottom);

		if ($l >= $r)
			return $r;

		// Swap values
		$tmp = $arr[$r];
		$arr[$r] = $arr[$l];
		$arr[$l] = $tmp;
	}
}


function qs($arr, $bottom, $top) {
	if ($bottom < $top) {
		$j = partition($arr, $bottom, $top);
		qs($arr, $bottom, $j);
		qs($arr, $j+1, $top);
	}
}


function QuickSort($arr) {
	qs($arr, 0, count($arr));
}


// Main
$n = 1000;
$timings = array();

for ($i = 0; $i < $n; ++$i) {
	$arr = [32,81,-76,-72,-55,-75,-91,-6,70,-49,-34,20,-84,65,-19,-74,-15,29,-96,58,0,0,12,37,41,23,-12,33,3,90,71,97,93,-22,-38,84,-55,40,-52,-77,8,-1,69,99,-97,-97,51,83,73,-60,-53,-92,-98,97,-24,58,70,69,-28,-40,16,-44,99,-63,15,75,-21,-19,-36,-1,89,-97,-78,-15,-29,-37,74,-7,38,-20,42,95,10,22,-40,-56,-75,75,-82,-68,70,-72,43,-81,34,-82,16,14,59,98,-40,55,19,49,12,-22,-91,-46,-1,-28,-47,-18,-68,-82,87,-18,-32,93,-44,54,19,10,47,-88,46,-54,68,24,-61,96,-75,54,-5,-45,88,-62,50,89,-59,-81,41,-79,-57,83,-89,-15,23,67,-16,66,-44,-28,70,91,-60,-27,56,98,-49,78,84,31,-61,63,45,-46,-22,-87,58,-74,-18,-50,-78,-17,-56,55,-39,-58,55,49,43,38,32,-48,97,-52,-21,-99,66,-11,-24,8,65,-91,-32,-4,-70,66,94,85,-71,0,-5,-36,-80,-57,-8,79,-42,-74,-66,88,-87,9,-72,-18,83,68,64,-39,3,-69,85,41,50,89,-45,-43,27,-50,-82,-8,-23,63,-24,49,97,86,28,98,-37,50,74,56,52,-81,60,35,-39,-20,56,-83,23,48,-99,-95,38,36,-45,-95,75,-68,90,-49,-82,98,-83,44,48,-11,-5,10,-78,99,-8,71,14,28,41,80,86,-81,64,81,-32,49,98,-40,-79,-53,-43,-44,-67,-35,-85,-1,-9,-67,15,-88,-14,-38,-96,52,-61,48,-20,13,-79,54,97,-10,-96,-7,20,99,-55,-76,56,98,12,-31,91,-85,68,-16,-67,48,94,17,-17,83,51,54,-88,81,-32,-37,4,-81,-98,-46,47,96,-43,-69,70,86,19,29,-56,33,-77,-64,72,6,-74,26,65,70,55,94,-87,-30,-69,5,98,-96,34,73,36,-7,-56,31,8,-15,-40,-14,-95,-66,95,32,-80,49,85,83,36,24,12,27,24,-34,40,84,91,-94,-20,-63,-5,87,-66,-6,56,32,37,-10,-83,-5,99,54,-11,32,88,-43,67,-22,-47,-52,61,-70,24,6,63,14,-37,-34,35,89,64,48,92,60,89,-84,21,-17,22,-77,76,22,77,58,-14,-50,-35,90,97,-85,32,30,64,-49,39,-28,96,18,52,-72,93,48,-8,23,-49,96,-31,-44,16,6,10,33,81,37,22,60,66,-74,15,-65,84,47,-17,76,-61,-9,-91,71,25,-68,57,-24,-63,-32,15,18,24,-24,29,91,63,-92,-62,15,-21,94,47,-13,46,91,-91,-84,41,87,-75,58,30,-15,28,-19,-90,-24,-79,-60,22,99,-79,12,-78,-85,22,-6,-34,47,25,-53,27,-79,-78,-46,74,-88,92,66,-21,-79,-24,-53,35,-54,-1,-44,31,-58,53,-34,72,-52,7,44,-6,-78,-71,-55,-79,23,84,4,-24,-19,21,-58,66,29,-6,98,-25,-21,76,-32,26,-8,-22,-93,75,-22,-87,55,-25,-46,-35,-11,57,32,-76,13,-37,70,-70,90,10,-13,-75,-52,-35,-95,-41,-97,21,-78,-65,99,21,-7,9,-75,-34,61,-89,-38,-35,-85,82,28,-82,-15,87,-39,-4,-44,51,-82,-42,25,-1,-68,3,-5,-61,-36,5,-64,38,-47,-8,75,2,4,10,-46,-7,-2,-33,98,-62,-89,37,0,47,-81,-39,91,-58,37,-92,-69,-81,-1,-96,72,-80,67,51,-45,-47,14,52,94,-31,50,-57,-82,5,-52,50,-4,-59,55,-94,78,83,-55,98,53,-41,-6,-92,-83,34,-20,45,-90,14,30,-33,33,-90,-90,64,99,-4,-90,-26,-99,-98,-47,17,93,-94,-1,6,56,-90,76,-88,29,10,49,34,43,80,-37,60,48,-86,42,-40,-33,-18,-14,3,52,96,-4,19,81,-82,41,-83,57,62,-28,23,64,-94,18,57,-30,-57,50,44,-77,-74,-3,-86,-81,-18,16,95,-39,-58,4,28,63,-21,63,60,-81,-96,-80,6,88,-3,62,-4,-37,-21,56,-73,-79,64,-34,74,-9,-66,30,97,-16,90,-96,-98,-38,-67,35,-28,16,23,-40,-46,62,-66,-66,-71,-52,52,-25,69,85,-52,-53,75,9,-80,0,-34,-53,71,52,-67,75,44,66,-24,79,57,11,64,-87,-20,-19,96,48,-55,-36,-28,-11,-53,60,60,9,-24,76,-53,-49,-60,68,95,69,-62,53,2,-91,-57,97,-61,31,1,80,-60,49,60,-8,-88,-79,-52,-70,-31,51,-95,-59,-78,-60,-39,-26,-61,52,0,72,47,-62,23,84,54,-32,-28,9,37,19,-77,62,12,28,-39,-38,99,-44,-45,58,15,8,9,65,94,-55,41,-68,20,64,-29,-7,7,-24,40,-31,-88,-78,12,41,-83,-51,-7,-49,63,55,4,-20,82,-82,-92,17,49,41,-95,36,-43,95,-74,10,-55,-14,27,-50,19,59,-96,56,-39,61,-10,23,-21,-64,23,65,60,69,-98,-47,77,-94,-37,-27,-30,-56,-36,99,89,-53,-47,-68,-63,-66,8,81,-56,-39,-34,3,81,-51,80,-87,75,0,13,-46,3,81,-94,62,-57,-88];
	$start = microtime(true);
	QuickSort($arr);
	$duration = microtime(true) - $start;
	$timings[] = $duration;
}

$sum = 0;
foreach($timings as $time) {
	$sum += $time;
}
$avg = $sum / $n;

printf("Average time:   %f\n", $avg);
echo "<br>";
?>