<?php

	$mult = new Tablas;	

	$mult -> multiplica();
	
	die();

	class Tablas {
	
		private $ctd;
		private $ini;
		private $max;

		function __construct()
		{
			$this -> ctd = $_GET['c'];
			$this -> ini = $_GET['i'];
			$this -> max = $_GET['m'];
	
			$this -> ctd = (empty($this -> ctd)?10:$this -> ctd);

			$this -> ini = (empty($this -> ini)?1:$this -> ini);
		
			$this -> max = (empty($this -> max)?12:$this -> max);
		} 
	

		public function multiplica()
		{
			for($i=$this -> ini; $i < ($this -> ini+ $this -> ctd); $i++)
			{
				for($j=1; $j <= $this -> max; $j++)
				{
					echo $i,' * ',$j,' = ',$i*$j,';', '<br/>';
				
				}
				echo '<br/>';
			}
		
		}
	}
?>
