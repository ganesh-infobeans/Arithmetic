<?php 
class arithmetic {
	// Added by shashank shroti
	function add($a,$b){
		$c = (float)$a + (float)$b;
		return $c;
	}     
	// Added by shashank shroti
	function substract($a,$b){
		$c = (float)$a - (float)$b;
		return $c;
	}     

}
$subs = new arithmetic();
$subs->substract(5,3);