<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Student Manager</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 

	require 'student-manager.php';

	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$student = null;
	if ($id != "") {
		$students = getAllStudents();
		foreach ($students as $st) {
			if ($st->getId() == $id) {
				$student = $st;
				break;
			}
		}
	}


	 ?>
	<h2 style="margin-left: 100px">Edit Student</h2>

	<div class="col-md-4">
		<form action="./Controller/editController.php" method="POST" name="add-student" id="ad-student" accept-charset="utf-8">
			<input class="form-control hidden" id="id" name="id" value="<?php echo $student->getId();?>">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" id="name" name="name" value="<?php echo $student->getName();?>">
			</div>
			<div class="form-group">
				<label>Birthday</label>
				<input class="form-control" id="birthday" name="birthday" value="<?php echo $student->getBirthday();?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" id="email" name="email" value="<?php echo $student->getEmail();?>">
			</div>
			<div class="form-group">
				<label>Class</label>
				<input class="form-control" id="classStu" name="classStu" value="<?php echo $student->getClass();?>">
			</div>
			<div class="form-group">
				<!-- <input type="submit" name="calculate" value="Tính"> -->
				<input  class="form-control" type="submit" name="submitStudent" style="width: 100px; margin-left: 150px;" value="Edit"></input>
			</div>
		</form>
	</div>

	<script>


		function validate()
		{
			var name = $('#name').val();
			var birthday = $('#birthday').val();
			var email = $('#email').val();
			var classStu = $('#classStu').val();
			alert("validate");
			if (name == "" || birthday == "" || email == "" || classStu == "") {
				alert("Please fill in all field!")
				return false;
			}
			return true;
		}

		function studentSubmit()
		{

			if (validate()) {
				alert("submit");
				$('#add-student').submit(function(){
					alert("submit");
				});
			}
		}

	</script>
</body>
</html>