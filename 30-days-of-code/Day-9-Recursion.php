<?php
$handle = fopen( 'php://stdin', 'r' );
function factorial( $n ) {
	$result = gmp_fact( $n );
	return $result;
}

fscanf( $handle, '%i', $n );
$result = factorial( $n );
echo $result . "\n";

fclose( $handle );
?>