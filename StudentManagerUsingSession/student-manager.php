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

function getStudent($id)
{
	$student = new Student();
	$db = new DB();
	$db->connectdb();
	$sql = "SELECT * FROM students WHERE id = '$id'";
	$data = $db->getOneData($sql);
	$db->disconnectdb();

	$student->setId($data["id"]);
	$student->setName($data["name"]); 
	$birthday = $data["birthday"];
	$student->setBirthday(DateTime::createFromFormat('Y-m-d', $birthday)->format('d-m-Y'));
	$student->setEmail($data["email"]);
	$student->setClass($data["class"]);
	return $student;
}

function addStudent(Student $student)
{
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
	$id = $student->getId();
	$name = $student->getName();
	$birthday = $student->getBirthday();
	$email = $student->getEmail();
	$classStu = $student->getClass();
	$db = new DB;
	$db->connectdb();
	$sql = "UPDATE students SET name = '$name', birthday = '$birthday', email = '$email', class = '$classStu' WHERE id = '$id'";
	$result = $db->editData($sql);
	$db->disconnectdb();
	if (!$result) 
	{
		echo "<script>alert('Fails to update data');</script>";
	}

}

function deleteStudent($id)
{
	$db = new DB;
	$db->connectdb();
	$sql = "DELETE FROM students WHERE id = '$id'";
	$result = $db->deleteData($sql);
	$db->disconnectdb();
	if (!$result) 
	{
		echo "<script>alert('Fails to delete data');</script>";
	}
	else {
		echo "<script>alert('Delete success');</script>";
	}
}

 ?>