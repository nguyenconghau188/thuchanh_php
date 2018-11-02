<?php 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_manager";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT * FROM students";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     $data = array();
//     while($row = $result->fetch_assoc()) {
//         array_push($data, $row);
//     }
//     var_dump($data);
// } else {
//     echo "0 results";
// }
// $conn->close();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="./Controller/addController.php" method="post" accept-charset="utf-8">
		<label>name</label>
		<input type="text" name="name" value="">
		<input type="submit" name="btn" value="btnsubmit">
	</form>
</body>
</html>