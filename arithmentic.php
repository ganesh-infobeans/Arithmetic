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

	}     
	// Added by Afsar khan
	function substract($a,$b){
		$c = (float)$a - (float)$b;
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

$subs = new arithmetic();
$subs->substract(5,3);


$mod = new airthmetic();
$mod->modulas(10,20);

