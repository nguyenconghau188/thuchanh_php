<?php 

$id = isset($_GET['id']) ? $_GET['id'] : "";

require '../student-manager.php';
	if ($id != "") 
	{
		deleteStudent($id);
	}

	header("location: ../list-student.php");

 ?>