<?php
abstract class Book
{
	protected $title;
	protected  $author;

	function __construct( $t, $a ) {
		$this->title = $t;
		$this->author = $a;
	}
	abstract protected function display();
}

class MyBook extends Book {
	protected $price;

	public function __construct( $title, $author, $price ) {
		parent::__construct( $title, $author );
		$this->price = $price;
	}

	public function display() {
		$r = 'Title: ' . $this->title;
		$r .= 'Author: ' . $this->author;
		$r .= 'Price: ' . $this->price;
		echo $r;
	}
}

$title = fgets( STDIN );
$author = fgets( STDIN );
$price = intval( fgets( STDIN ) );
$novel = new MyBook( $title, $author, $price );
$novel->display();

?>