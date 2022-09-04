<?php
$handle = fopen( 'php://stdin', 'r' );

fscanf( $handle, '%f', $mealCost );
fscanf( $handle, '%f', $tip );
fscanf( $handle, '%f', $tax );

$totalCosts = (float) ( $mealCost + ( $mealCost * ( $tip / 100 ) ) + ( $mealCost * ( $tax / 100 ) ) );

echo 'The total meal cost is ' . round( $totalCosts ) . ' dollars.';

fclose( $handle );
?>