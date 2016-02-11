<?php
	
	// Variable starts with $, 
	//string has to use quotation marks
	// line ends with semicolon
	$first_name = "Romil";
	$last_name = "Rõbtšenkov";
	
	// show code to browser
	// for adding up numbers + sign
	// for adding up strings .
	echo $first_name." ".$last_name;
	
	// > greater than
	// < smaller than
	// >= greater than or equal
	// <= smaller than or equal
	// == equal
	// != not equal
	
	$age = 4;
	
	//if age is smaller than or equal to 6, then you can sleep at lunchtime
	if($age <= 6){
		//it is true
		echo " yes you can sleep at lunchtime";
		
	}else{
		//it is false
		echo " no, you are at school";
	}
 
?>

<br>

<?php

	// loop
	
	for ($i=1; $i <= $age; $i=$i+1){
		
		//if condition is true
		echo $i;
		
	}
	
	

?>
<br>

<?php
	
	echo "Today is ".date("d.m.Y H:i");

?>

