<?php
$_fp = fopen( 'php://stdin', 'r' );
fscanf( $_fp, '%d', $n );

for ( $i = 0; $i < $n; $i++ ) {
	$s = str_split( fgets( $_fp ) );
	$s = str_replace( "\n", '', $s );

	$evenString = '';
	$oddString = '';

	for ( $j = 0; $j < count( $s ); $j++ ) {
		if ( $j == 0 || $j % 2 == 0 ) {
			$evenString .= $s[$j];
		}
		if ( $j > 0 && $j % 2 != 0 ) {
			$oddString .= $s[$j];
		}
	}
	echo $evenString . ' ' . $oddString . "\n";
}

fclose( $_fp );
?>