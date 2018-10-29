<?php 

require 'Model/student.php';
session_start();




function getAllStudents()
{
	return isset($_SESSION['students']) ? $_SESSION['students'] : array();	
}

function addStudent(Student $student)
{
	$students = getAllStudents();
	$id = 0;
	if (!empty($students)) {
		$lastStudent = new Student;
		$lastStudent = end($students);
		$id = $lastStudent->getId() + 1;


	}
	$student->setId($id);
	array_push($students, $student);
	var_dump($students);
	$_SESSION['students'] = $students;
	header("location: addController.php");
}

function editStudent(Student $student)
{
	$students = getAllStudents();
	foreach ($students as $st) {
		if ($st->getId() == $student->getId()) {
			$students[$st->getId()] = $student;
		}
	}
	$_SESSION['students'] = $students;
}

 ?>