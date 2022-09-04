<?php
$_fp = fopen( 'php://stdin', 'r' );
fscanf( $_fp, '%d', $n );

function isPrime( $number ) {
	if ( $number < 2 ) {
		return false;
	}

	for ( $i = 2; $i * $i <= $number; $i++ ) {
		if ( $number % $i == 0 ) {
			return false;
		}
	}
	return true;
}


for ( $i = 0; $i < $n; $i++ ) {
	$number = fgets( $_fp );
	$number = str_replace( "\n", '', $number );
	echo ( isPrime( $number ) ? 'Prime' : 'Not prime' ) . "\n";
}

fclose( $_fp );
?>