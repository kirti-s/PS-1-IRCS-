<?php  
function rand_string( $length ) 
{  
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";  
	$size = strlen( $chars );
	$passwords = array();  
	for($j = 0; $j < 128; $j++ )
	{
		for( $i = 0; $i < $length; $i++ ) 
		{  
			$str = $chars[ rand( 0, $size - 1 ) ];  
			 $passwords[$j] = $str;  
		}
	}  
}  
rand_string(8);  
?>  