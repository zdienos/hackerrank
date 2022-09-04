<?php
$_fp = fopen( 'php://stdin', 'r' );
fscanf( $_fp, '%d', $n );

$phoneBook = array();

for ( $i = 0; $i < $n; $i++ ) {
	$Array = explode( ' ', str_replace( "\n", '', fgets( $_fp ) ) );
	$name = $Array[0];
	$phone = $Array[1];
	$phoneBook[$name] = $phone;
}

while ( ( $q = fgets( $_fp ) ) != false ) {
	$q = str_replace( "\n", '', $q );
	if ( isset( $phoneBook[$q] ) ) {
		echo $q . '=' . $phoneBook[$q] . "\n";
	} else {
		echo "Not found\n";
	}
}

fclose( $_fp );
?>