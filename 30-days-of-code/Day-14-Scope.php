<?php
class Difference{
	private $elements = array();
	public $maximumDifference;

	public function __construct( $a ) {
		$this->elements = $a;
	}

	public function ComputeDifference() {
		$this->maximumDifference = abs( min( $this->elements ) - max( $this->elements ) );
	}
}

$N = intval( fgets( STDIN ) );
$a = array_map( 'intval', explode(' ', fgets( STDIN ) ) );
$d = new Difference( $a );
$d->ComputeDifference();
print( $d->maximumDifference );
?>