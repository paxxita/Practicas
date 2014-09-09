<?php

	$ctd = $_GET['c'];
	$ini = $_GET['i'];
	$max = $_GET['m'];
	
	/*if(empty($ctd)) 
	{
		$ctd = 10;
	}*/

	$ctd = (empty($ctd)?10:$ctd);

	/*if(empty($ini))
	{
		$ini = 1;
	}*/
	
	$ini = (empty($ini)?1:$ini);
	
	/*if(empty($max))
	{
		$max = 12;
	}*/
	
	$max = (empty($max)?12:$max);

	mult($ctd, $ini, $max);
	
	die();

	function mult($ctd, $ini, $max)
	{
		for($i=$ini; $i < ($ini+$ctd); $i++)
		{
			for($j=1; $j <= $max; $j++)
			{
				echo $i,' * ',$j,' = ',$i*$j,';', '<br/>';
				
			}
			echo '<br/>';
		}
		
		

	}
?>
