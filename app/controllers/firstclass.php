<?php
/**
 * 
 */
class firstclass extends mainctrltwo{
	
	function __construct(){
     parent::__construct();
	}

	public function testmethod($param){
		echo "it is method $param";
	}
}
?>
