<?php 
class arithmetic {
	// Added by shashank shroti
	function add($a,$b){
		$c = (float)$a + (float)$b;
		return $c;
	}   
	//added by Swati Shrivas 
	function print_Str(){
		echo "Testing github";
	}
}
$obj =  new arithmetic();
$obj->print_Str();