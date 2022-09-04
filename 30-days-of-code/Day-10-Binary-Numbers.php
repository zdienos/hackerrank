<?php
$handle = fopen( 'php://stdin', 'r' );
fscanf( $handle, '%d', $n );

$count = 0;
$min = 0;

while ( $n > 0 ) {
	if ( $n % 2 == 1 ) {
		$count++;
		if ( $count >= $min ) {
			$min = $count;
		}
	} else {
		$count = 0;
	}
	$n = $n / 2;
}
echo $min;

fclose($handle);
?>