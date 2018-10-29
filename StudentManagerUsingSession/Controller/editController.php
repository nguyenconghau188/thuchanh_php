<?php 

	require "../student-manager.php";
	require_once "../Model/student.php";

	$id = isset($_POST['id']) ? $_POST['id'] : false;
	$name = isset($_POST['name']) ? $_POST['name'] : false;
	$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false; 
	$classStu = isset($_POST['classStu']) ? $_POST['classStu'] : false;

	if ($name) {
		$student = new Student;
		$student->setId($id);
		$student->setName($name);
		$student->setBirthday($birthday);
		$student->setEmail($email);
		$student->setClass($classStu);

		editStudent($student);
	}

	header("location: ../list-student.php")
 ?>