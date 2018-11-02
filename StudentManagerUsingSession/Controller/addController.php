 <?php 

	require "../student-manager.php";
	require_once "../Model/student.php";

	$name = isset($_POST['name']) ? $_POST['name'] : false;
	$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false; 
	$classStu = isset($_POST['classStu']) ? $_POST['classStu'] : false;

	if ($name) {
		$student = new Student;
		$student->setName($name);
		$student->setBirthday($birthday);
		$student->setEmail($email);
		$student->setClass($classStu);

		addStudent($student);
	}


	header("location: ../list-student.php")

?>