<?php 

require 'Model/student.php';
require 'Systems/connect_sql.php';
session_start();


function convertToStudentArray($data)
{
	$students = array();
	foreach ($data as $dt) {
		$student = new Student();
		$student->setId($dt["id"]);
		$student->setName($dt["name"]); 
		$birthday = $dt["birthday"];
		$student->setBirthday(DateTime::createFromFormat('Y-m-d', $birthday)->format('d-m-Y'));
		$student->setEmail($dt["email"]);
		$student->setClass($dt["class"]);
		array_push($students, $student);
	}
	return $students;
}

function getAllStudents()
{
	$db = new DB();
	$db->connectdb();
	$sql = "SELECT * FROM students";
	$data = $db->getData($sql);
	$db->disconnectdb();
	$students = convertToStudentArray($data);
	return $students;
	//return isset($_SESSION['students']) ? $_SESSION['students'] : array();	
}

function addStudent(Student $student)
{
	var_dump($student);
	//$students = getAllStudents();
	// $id = 0;
	// if (!empty($students)) {
	// 	$lastStudent = new Student;
	// 	$lastStudent = end($students);
	// 	$id = $lastStudent->getId() + 1;
	// }
	//$student->setId($id);
	//array_push($students, $student);
	$name = $student->getName();
	$birthday = $student->getBirthday();
	$email = $student->getEmail();
	$classStu = $student->getClass();
	$db = new DB();
	$db->connectdb();
	$sql = "INSERT INTO students (name, birthday, email, class) VALUES ('$name', '$birthday', '$email', '$classStu')";
	$result = $db->insertData($sql);
	$db->disconnectdb();
	if (!$result) 
	{
		echo "<script>alert('Fails to insert data');</script>";
	}
	//header("location: addController.php");
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