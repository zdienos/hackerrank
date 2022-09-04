<?php
class Calculator {
	protected $n;
	protected $p;

	public function power( $n, $p ) {
		$this->n = $n;
		$this->p = $p;

		if ( $this->n < 0 || $this->p < 0 ) {
			throw new Exception( 'n and p should be non-negative' );
		}
		return (int) pow( $this->n, $this->p );
	}
}

$myCalculator = new Calculator();
$T = intval( fgets( STDIN ) );
while ( $T-->0 ) {
	list( $n, $p ) = explode( " ", trim( fgets( STDIN ) ) );
	try {
		$ans = $myCalculator->power( $n, $p );
		echo $ans."\n";
	}
	catch ( Exception $e ) {
		echo $e->getMessage()."\n";
	}
}
?>