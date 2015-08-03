<?php 
class arithmetic {
	// Added by shashank shroti
	function add($a,$b){
		$c = (float)$a + (float)$b;
		return $c;

	}     
	// Added by Afsar khan
	function substract($a,$b){
		$c = (float)$a - (float)$b;
		return $c;
	}     

	//added by Swati Shrivas
	function print_Str(){
		echo "Testing github";
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
	
	function division($a=1,$b=1){
		if(($a != 0) && ($b != 0)) {
			return (float)$a/(float)$b;
		} else {
			return false;
		}
	}
}

$subs = new arithmetic();
$subs->substract(5,3);


$mod = new arithmetic();
$mod->modulas(10,20);

$obj =  new arithmetic();
$obj->print_Str();


$div = new arithmetic();
$result = $div->division(10,2);
var_dump($result);