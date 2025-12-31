<html>

<head>
    <title>Page Title</title>
</head>

<body>
	<?php
		echo"<h1>hello world!</h1>";
		$txt="I'm not from around here";
		echo"hey $txt<br>";
		echo"hello".$txt."!!<br>";

		$x=8;
		$y=4;
		echo $x*$y;

		define("txt2", "This is a constant<br>");
		echo "<br>";
		echo txt2;

		echo strlen(txt2);
		echo "<br>",strrev($txt);

		echo "<br><br>";

		$cars = array("Alto", "Lancer", "AE86");
		$arrlen = count($cars);
		
		for($i=0; $i < $arrlen; $i++){
			echo "<br>",$cars[$i];
		}
		
		echo "<br><br>";
		
		$cc=array("Alto"=>0.8, "Lancer"=>1.6, "AE86"=>1.6);
	
		foreach($cc as $key => $value){
			echo $key.":".$value."<br>";
		}
		
	?>
</body>
</html>