<?php 
class arithmetic {
	// Added by shashank shroti
	function add($a,$b){
		$c = (float)$a + (float)$b;
		return $c;
	}

	function multiply($m1,$m2){
		$multiply=$m1*$m2;
		
		return $multiply;
		
	}	

	
	// Added by Anand Pandey
	function modulas($a,$b){
		$c = (float)$a % (float)$b;
		return $c;
	}    
}

$mod = new airthmetic();
$mod->modulas(10,20);
