<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$BID=$_REQUEST['BID'];
		$BName=$_REQUEST['BName'];
		$BAuthor=$_REQUEST['BAuthor'];
		$BEdition=$_REQUEST['BEdition'];
		$BPublisher=$_REQUEST['BPublisher'];
	
		if(empty($BID) || empty($BName) || empty($BAuthor) || empty($BEdition) || empty($BPublisher)){
			echo "<p>Datas are not uploaded</p>";
		} else{
			$dbConn = mysqli_connect("localhost","root", "", "mca");		
			if(!$dbConn){
				die("Connection failed:".mysqli_connect_error());
			}
			echo"Connected successfully<br>";


			$sql="INSERT INTO books VALUES ($BID, '$BName', '$BAuthor', '$BEdition', '$BPublisher')";
			if(mysqli_query($dbConn, $sql)){
				echo "Inserted successfully<br><br>";
			} else{
				echo "couldn't Inserted: ".mysqli_error($dbConn);
			}


			$sql="SELECT * FROM books";
			$result = mysqli_query($dbConn, $sql);
	
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					echo "Book ID:" .$row["Book_ID"]."  Book Title:" .$row["Book_Name"]. "Book Author: ".$row["Book_Author"]." Book Edition: ".$row["Book_Edition"]. "Book Publisher: ".$row["Book_Publisher"]."<br>";
				}		
			} else{
				echo "No records found";
			}

			mysqli_close($dbConn);	
		}
	} else{
		echo "<p>Server issue!!!</p>";
	}
?>