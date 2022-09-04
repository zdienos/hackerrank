<?php
$handle = fopen( 'php://stdin','r' );
fscanf( $handle, '%d', $N );

$emails = array();

for ( $a0 = 0; $a0 < $N; $a0++ ) {
	fscanf( $handle, '%s %s', $firstName, $emailID );

	$pattern = '/@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';
	preg_match( $pattern, $emailID, $matches );
	if ( $matches[0] == '@gmail.com' ) {
		$emails[] = $firstName;
	}
}

asort( $emails );

foreach ( $emails as $name ) {
	echo $name . "\n";
}

fclose( $handle );
?>