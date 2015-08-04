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


		// Added by Prasun
	function substraction($a,$b){
		$c = $a-$b;
		return $c;
	}  

	function division($a=1,$b=1){
		if(($a != 0) && ($b != 0)) {
			return ((float)$a/(float)$b);
		} else {
			throw new Exception('Zero is not allowed in division operation');
		}
	}

	function print_array($arr){
		print_r($arr);
	}
	
	function arithmetic(){
		echo "Wow !git is working ";
	}

}
$obj =  new arithmetic();
$obj->print_Str();
$obj->substract(5,3);
$obj->modulas(10,20);

var_dump($result);
$result =  $obj->print_array(array("name"=>"test"));

try {
	$result = $obj->division(10,2);
	echo "<br />".$result."<br />";
	$result = $obj->division(10,0);
} catch(Exception $e) {
	echo "<br />".$e->getMessage()."<br />";
}

