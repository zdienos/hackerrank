<?php
interface AdvancedArithmetic{
	public function divisorSum( $n );
}

class Calculator implements AdvancedArithmetic {
	public function divisorSum( $n ) {
		$sum = $n;
		for ( $i = 1; $i <= $n / 2; $i++ ) {
			if ( $n % $i == 0 ) {
				$sum += $i;
			}
		}
		return $sum;
	}
}

$n = intval( fgets( STDIN ) );
$myCalculator = new Calculator();
if ( $myCalculator instanceof AdvancedArithmetic ) //checking if Calculator has implemented AdvancedArithemtic
{
	$sum = $myCalculator->divisorSum( $n );
	echo "I implemented: AdvancedArithmetic\n" . $sum;
} else {
	echo 'Wrong answer'; // You will get this output if you dont implement
}
?>