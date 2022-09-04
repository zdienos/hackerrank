<?php
class Node {
	public $data;
	public $next;

	function __construct( $d ) {
		$this->data = $d;
		$this->next = NULL;
	}
}

class Solution {
	function removeDuplicates( $head ) {
		for ( $node = $head; $node != null; $node = $node->next ) {
			while ( $node->next != null && $node->data == $node->next->data ) {
				$node->next = $node->next->next;
			}
		}
		return $head;
	}

	function insert( $head, $data ) {
		$p = new Node( $data );
		if ( $head == null ) {
			$head = $p;
		} else if ( $head->next == null ) {
			$head->next = $p;
		} else {
			$start = $head;
			while ( $start->next != null ) {
				$start = $start->next;
			}
			$start->next = $p;
		}
		return $head;
	}

	function display( $head ) {
		$start = $head;
		while ( $start ) {
			echo $start->data, ' ';
			$start = $start->next;
		}
	}
}
$T = intval( fgets( STDIN ) );
$head = null;
$mylist = new Solution();
while ( $T-->0 ) {
	$data = intval( fgets( STDIN ) );
	$head = $mylist->insert( $head, $data );
}
$head = $mylist->removeDuplicates( $head );
$mylist->display( $head );
?>