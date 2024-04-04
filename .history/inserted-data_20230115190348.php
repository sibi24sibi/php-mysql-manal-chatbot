<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "onlinebot");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$message = $_REQUEST['messages'];
		$response = $_REQUEST['response'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO chatbot VALUES ('$messages',
			'$response')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";

			echo nl2br("\n$messages\n $response");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
