<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') { 
		$function=$_POST['Function'];
		exec("L4 $function");
		$xT = file_get_contents("http://localhost/x.txt");
		$X = explode(" ", $xT);
		$yT = file_get_contents("http://localhost/y.txt");
		$Y = explode(" ", $yT);
		$xy=array();
		for($i = 0; $i <401; $i++) 
		  { 
			$xy[$i]=[$X[$i],$Y[$i]];
		  }		
		$arr = json_encode($xy);
		$xHandle = fopen("x.txt", "w");
		$yHandle = fopen("y.txt", "w");
		echo $arr;
		
	}
?>