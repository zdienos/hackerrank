<?php
$handle = fopen( 'php://stdin', 'r' );
fscanf( $handle, '%d', $t );

for ( $a0 = 0; $a0 < $t; $a0++ ) {
	fscanf( $handle, '%d %d', $n, $k );
	$res = ( ( ( $k - 1 ) | $k ) > $n && $k % 2 == 0 ) ? $k - 2 : $k - 1;
	echo $res. "\n";
}

fclose( $handle );
?>