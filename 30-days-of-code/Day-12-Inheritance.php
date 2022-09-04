<?php
class person {
	protected $firstName, $lastName, $id;

	public function __construct($first_name, $last_name, $identification) {
		$this->firstName = $first_name;
		$this->lastName = $last_name;
		$this->id = $identification;
	}

	function printPerson() {
		print("Name: {$this->lastName}, {$this->firstName}\n");
		print("ID: {$this->id}\n");
	}
}

class Student extends person {
	private $testScores;

	public function __construct($firstName, $lastName, $id, $testScores) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->id = $id;
		$this->testScores = $testScores;
	}

	public function calculate() {
		$sum = 0;
		$avg = 0;
		for ( $i = 0; $i < count( $this->testScores ); $i++ ) {
			$sum += $this->testScores[$i];
		}
		$avg = $sum / count( $this->testScores );

		if ( 90 <= $avg && $avg <= 100 ) {
			$grade = 'O';
		} elseif ( 80 <= $avg && $avg < 90 ) {
			$grade = 'E';
		} elseif ( 70 <= $avg && $avg < 80 ) {
			$grade = 'A';
		} elseif ( 55 <= $avg && $avg < 70 ) {
			$grade = 'P';
		} elseif ( 40 <= $avg && $avg < 55 ) {
			$grade = 'D';
		} else {
			$grade = 'T';
		}
		return $grade;
	}
}

$file = fopen( 'php://stdin', 'r' );

$name_id = explode( ' ', fgets( $file ) );

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int) $name_id[2];

fgets( $file );

$scores = array_map( 'intval', explode( ' ', fgets( $file ) ) );

$student = new Student( $first_name, $last_name, $id, $scores );

$student->printPerson();

print( "Grade: {$student->calculate()}" );