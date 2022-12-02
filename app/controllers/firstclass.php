<?php
/**
 * 
 */
class firstclass extends mainctrltwo{
	
	function __construct(){
     // parent::__construct();
		echo "obj created <br>";
	}

	public function testmethod($parameter1){
		echo "it is method $parameter1<br>";
	}
}
?>
