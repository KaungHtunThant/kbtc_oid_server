<?php
	
	// Include db string
	include "db.php";

	//employee Create
	if(isset($_POST["empCreate"])){
		$url = htmlspecialchars($_POST['url']);
		$empID = htmlspecialchars($_POST['empID']);
		$empName = htmlspecialchars($_POST['empName']);
		$empNRC = htmlspecialchars($_POST['empNRC']);
		$empPositionID = htmlspecialchars($_POST['empPositionID']);
		$empDeptID = htmlspecialchars($_POST['empDeptID']);
		$empJoinDate = htmlspecialchars($_POST['empJoinDate']);
		$empKey = "RandomGiberishString";
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

	//employee Read
	if(isset($_POST["empRead"])){
		$json = array();
		$sql = "SELECT * FROM employees WHERE empStatus = 1";

		$conn = dbconnect();
		$result = $conn->query($sql);
		$i = 0;

		//Prepare convertion to Json
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr = array(
					"empID" => $row["empID"],
					"empName" => $row["empName"],
					"empNRC" => $row["empNRC"],
					"empPositionID" => $row["empPositionID"],
					"empDeptID" => $row["empDeptID"],
					"empJoinDate" => $row["empJoinDate"],
					"empqrcode" => "https://localhost/kbtc_oid_client/assets/qrcodes/".$id.".png",
					"empKey" => $row["empKey"]
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

		//Encode Array to Json
		$JSON = json_encode($json);
		echo $JSON;
	}

	if(isset($_POST["empReadDetails"])){
		$json = array();
		$empID = htmlspecialchars($_POST['empID']);
		$sql = "SELECT * FROM employees WHERE empStatus = 1 AND empID='$empID';";

		$conn = dbconnect();
		$result = $conn->query($sql);
		$i = 0;

		//Prepare convertion to Json
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr = array(
					"empID" => $row["empID"],
					"empName" => $row["empName"],
					"empNRC" => $row["empNRC"],
					"empPositionID" => $row["empPositionID"],
					"empDeptID" => $row["empDeptID"],
					"empJoinDate" => $row["empJoinDate"],
					"empqrcode" => "https://localhost/kbtc_oid_client/assets/qrcodes/".$id.".png",
					"empKey" => $row["empKey"]
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

		//Encode Array to Json
		$JSON = json_encode($json);
		echo $JSON;
	}
//student Create
	if(isset($_POST["studCreate"])){
		$url = htmlspecialchars($_POST['url']);
		$studID = htmlspecialchars($_POST['studID']);
		$studName = htmlspecialchars($_POST['studName']);
		$studBatch = htmlspecialchars($_POST['studBatch']);
		$studClass = htmlspecialchars($_POST['studClass']);
		$studguardianName = htmlspecialchars($_POST['studguardianName']);
		$studdateofBirth = htmlspecialchars($_POST['studdateofBirth']);
		$studemergencyPhone1 = htmlspecialchars($_POST['studemergencyPhone1']);
		$studemergencyPhone2 = htmlspecialchars($_POST['studemergencyPhone2']);
		$studschoolPhone = htmlspecialchars($_POST['studschoolPhone']);
		$studKey = "RandomGiberishString";

		$sql = "SELECT * FROM students WHERE studID = $studID";
		$conn = dbconnect();
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$Message = "Error: ID Already Exists";
		} else {
			$sql = "INSERT INTO students(studID, studName, batchID, classID, guardianName, birthDate, studPhone1, studPhone2, schoolPhone, studStatus, studKey) VALUES('$studID', '$studName', '$studBatch', '$studClass', '$studguardianName','$studdateofBirth','$studemergencyPhone1','$studemergencyPhone2','$studschoolPhone', 1, '$studKey')";
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

	//student Read
	if(isset($_POST["studRead"])){
		$json = array();
		$sql = "SELECT * FROM students WHERE studStatus = 1";

		$conn = dbconnect();
		$result = $conn->query($sql);
		$i = 0;

		//Prepare convertion to Json
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr = array(
					"studID" => $row["studID"],
					"studName" => $row["studName"],
					"studBatch" => $row["batchID"],
					"studClass" => $row["classID"],
					"studqrcode" => "https://localhost/kbtc_oid_client/assets/qrcodes/student/".$id.".png",
					"studKey" => $row["studKey"]
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

		//Encode Array to Json
		$JSON = json_encode($json);
		echo $JSON;
	}

	if(isset($_POST["studReadDetails"])){
		$json = array();
		$empID = htmlspecialchars($_POST['studID']);
		$sql = "SELECT * FROM students WHERE studStatus = 1 AND studID='$empID';";

		$conn = dbconnect();
		$result = $conn->query($sql);
		$i = 0;

		//Prepare convertion to Json
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr = array(
					"studID" => $row["studID"],
					"studName" => $row["studName"],
					"studBatch" => $row["studBatch"],
					"empPositionID" => $row["empPositionID"],
					"empDeptID" => $row["empDeptID"],
					"empJoinDate" => $row["empJoinDate"],
					"empqrcode" => "https://localhost/kbtc_oid_client/assets/qrcodes/".$id.".png",
					"empKey" => $row["empKey"]
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

		//Encode Array to Json
		$JSON = json_encode($json);
		echo $JSON;
	}
	
	


?>