<html>
<head>
    <title>server</title>
</head>
<body>
	<?php
		$dbConn = mysqli_connect("localhost","root", "", "mca");		
		if(!$dbConn){
			die("Connection failed:".mysqli_connect_error());
		}
		echo"Connected successfully<br>";

		$sql="SELECT * FROM books";
		$result = mysqli_query($dbConn, $sql);
	
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
        echo "Book ID:" .$row["Book_ID"]."   Book Name:" .$row["Book_Name"]. "   Book Price: ".$row["Book_Price"]."<br>";
      }		
    } else{
      echo "No records found";
    }

		mysqli_close($dbConn);
	?>
	
</body>
</html>