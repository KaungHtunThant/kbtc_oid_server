<?php
	include 'db.php';
	$conn = dbconnect();
	
	$sql = "SELECT * FROM employees where cardID==";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
?>