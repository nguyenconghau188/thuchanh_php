<?php 

$id = isset($_GET['id']) ? $_GET['id'] : "";

require '../student-manager.php';
if ($id != "") {
	$students = getAllStudents();

	foreach ($students as $student) {
		if ($student->getId() == $id) {
			var_dump($id);
			unset($students[$id]);
			break;
		}

	}

	$_SESSION['students'] = $students;
	header("location: ../list-student.php");
}

 ?>