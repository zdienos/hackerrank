<?php
$handle = fopen( 'php://stdin', 'r' );
fscanf( $handle, '%s', $s );

try {
	new ReflectionClass( 'ReflectionClass' . ( (int) $s . "" != $s ) );
	echo $s;
} catch ( Exception $e ) {
	echo 'Bad String';
}

fclose($handle);
?>