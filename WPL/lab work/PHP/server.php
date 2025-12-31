<html>

<head>
    <title>server</title>
</head>

<body>

	


	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$fName=$_REQUEST['fname'];
			$lName=$_REQUEST['lname'];
			$loc=$_REQUEST['loc'];
			
			if(empty($fName)){
				echo "<p>Datas are not uploaded</p>";
			} else{
			echo "<p>".$fName."</p>";
			echo "<p>".$lName."</p>";
			echo "<p>".$loc."</p>";
			}
		} else{
			echo "<p>Server issue!!!</p>";
		}
		
	?>
	
</body>
</html>