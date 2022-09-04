<?php
$handle = fopen( 'php://stdin', 'r' );
fscanf( $handle, '%d', $n );
$arr_temp = fgets( $handle );
$arr = explode( ' ', $arr_temp );
array_walk( $arr, 'intval' );

$Array = array();

for ( $i = 0; $i < $n; $i++ ) {
	$Array[] = $arr[$i];
}

echo implode( ' ', array_reverse( $Array ) );

fclose( $handle );
?>