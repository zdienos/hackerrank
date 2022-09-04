<?php
$_fp = fopen( 'php://stdin', 'r' );

$date = array();
while ( $f = fgets( $_fp ) ) {
	$date[] = explode( ' ', str_replace( "\n", '', $f ) );
}

for ( $i = 0; $i < count( $date ); $i++ ) {
	$dateLine = $date[$i];
	for ( $j = 0; $j < count( $dateLine ); $j++ ) {
		$dateArray[] = $dateLine[$j];
	}
}

$actualDay = $dateArray[0];
$actualMonth = $dateArray[1];
$actualYear = $dateArray[2];
$expectedDay = $dateArray[3];
$expectedMonth = $dateArray[4];
$expectedYear = $dateArray[5];

$fine = 0;
if ( $actualYear > $expectedYear ) {
	$fine = 10000;
} else if ( $actualMonth > $expectedMonth && ( $actualYear >= $expectedYear ) ) {
	$fine = 500 * ( $actualMonth - $expectedMonth );
} else if ( $actualDay > $expectedDay && ( $actualMonth >= $expectedMonth ) && ( $actualYear >= $expectedYear ) ) {
	$fine = 15 * ( $actualDay - $expectedDay );
} else {
	$fine = 0;
}
echo $fine;

fclose( $_fp );
?>