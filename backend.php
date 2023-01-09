<?php

	include "db.php";
	if(isset($_POST["empCreate"])){
		$url = htmlspecialchars($_POST['url']);
		$empID = htmlspecialchars($_POST['empID']);
		$empName = htmlspecialchars($_POST['empName']);
		$empNRC = htmlspecialchars($_POST['empNRC']);
		$empPositionID = htmlspecialchars($_POST['empPositionID']);
		$empDeptID = htmlspecialchars($_POST['empDeptID']);
		$empJoinDate = htmlspecialchars($_POST['empJoinDate']);
		$empKey = "RandomBullPoopString";
		$sql = "SELECT * FROM employees WHERE empID = $empID";
		$conn = dbconnect();
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$Message = "Error: ID Already Exists";
		} else {
			$sql = "INSERT INTO employees(empID, empName, empNRC, empPositionID, empDeptID, empJoinDate, empStatus, empKey) VALUES('$empID', '$empName', '$empNRC', $empPositionID, $empDeptID, '$empJoinDate', 1, '$empKey')";
			if ($conn->query($sql) === TRUE) {
				$Message = "Success";
			} else {
				$Message = "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		$conn->close();
		$json = array(
			"Message" => $Message
		);
		$JSON=json_encode($json);
		echo $JSON;
	}

	if(isset($_POST["empRead"])){
		$json = array();
		$sql = "SELECT * FROM employees WHERE empStatus = 1";

		$conn = dbconnect();
		$result = $conn->query($sql);
		$i = 0;

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr = array(
					"empID" => $row["empID"],
					"empName" => $row["empName"],
					"empNRC" => $row["empNRC"],
					"empPositionID" => $row["empPositionID"],
					"empDeptID" => $row["empDeptID"],
					"empJoinDate" => $row["empJoinDate"],
					"empqrcode" => "https://localhost/kbtc_oid_client/assets/qrcodes/".$id.".png"
				);
				$json["row$i"] = $arr;
				$i += 1;
			}
			$Message = "Read Success!";
		} else {
			$Message = "Error: " . $sql . "<br>" . $conn->error;
		}
		$json["ReadMessage"] = $Message;
		$json["ReadCount"] = $i;
		$JSON = json_encode($json);
		echo $JSON;
	}
?>