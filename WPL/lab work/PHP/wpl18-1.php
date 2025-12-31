<html>
<head>
    <title>Form</title>
</head>
<body>

	<form method="post" action="wpl18-2.php">
		Book Id:<input type="text" name="BID"><br>
		Book Title:<input type="text" name="BName"><br>
		Author:<input type="text" name="BAuthor"><br>
		Edition:<input type="text" name="BEdition"><br>
		Publisher:<input type="text" name="BPublisher"><br>
		
		<input type="submit" name="adding">
	</form>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Search: <input type="text" name="searchInput">
		<input type="submit" name="searching">
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$keyEle=$_REQUEST['searchInput'];

			$dbConn = mysqli_connect("localhost","root", "", "mca");		
			if(!$dbConn){
				die("Connection failed:".mysqli_connect_error());
			}

			$sql="SELECT * FROM books WHERE Book_Author='$keyEle'";
			$result = mysqli_query($dbConn, $sql);
	
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					echo "Book ID:" .$row["Book_ID"]."  Book Title:" .$row["Book_Name"]. "Book Author: ".$row["Book_Author"]." Book Edition: ".$row["Book_Edition"]. "Book Publisher: ".$row["Book_Publisher"]."<br>";
				}		
			} else{
				echo "No records found";
			}

		}
	?>
</body>
</html>