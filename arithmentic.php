<?php 
class arithmetic {
	// Added by shashank shroti
	function add($a,$b){
		$c = (float)$a + (float)$b;
		return $c;
	}     

	
	// Added by Anand Pandey
	function modulas($a,$b){
		$c = (float)$a % (float)$b;
		return $c;
	}    
}

$mod = new airthmetic();
$mod->modulas(10,20);