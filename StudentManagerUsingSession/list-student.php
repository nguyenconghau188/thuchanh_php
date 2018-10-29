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
	
	<h2>List Student</h2>
	<br><br>
	<a href="add-student.php">Add new Student</a>
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Birthday</th>
				<th>Email</th>
				<th>Class</th>
				<th></th>
			</tr>
			<?php 
			require 'student-manager.php';
			require_once 'Model/student.php';
			$students = getAllStudents();
			foreach ($students as $student) 
			{
			?>
				<tr>
					<td><?php echo $student->getId(); ?></td>
					<td><?php echo $student->getName(); ?></td>
					<td><?php echo $student->getBirthday(); ?></td>
					<td><?php echo $student->getEmail(); ?></td>
					<td><?php echo $student->getClass(); ?></td>
					<td><a href="edit-student.php?id=<?php echo $student->getId();?>">Edit</a> | <a href="./Controller/deleteController.php?id=<?php echo $student->getId();?>">Delete</a></td>
				</tr>
			<?php
			}  
			?>
		</table>
		
	</div>

</body>
</html>