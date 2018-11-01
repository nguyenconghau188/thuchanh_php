<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
    	.myImage {
    		height: 200px;
    	}
    </style>
</head>
<body>
	<!-- <!-- HEADER -->	
	<div class="jumbotron text-center" style="margin-bottom: 0">
		<h2>Student Management Website</h2>
	</div>
	<!-- END HEADER -->

	<!-- NAVIGATION BAR -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header" style="margin-left: 10%">
				<a href="#" class="navbar-brand">Student Manager</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li class="active"><a href="#">Students</a></li>
					<li><a href="#">Teachers</a></li>
					<li><a href="#">Class</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVIGATION BAR -->

	<!-- CONTENT -->
	<div class="container" style="margin-top: 20px; margin-bottom: 20px; min-height: 500px;">
		<div class="row">
			<!-- side -->
			<div class="col-sm-4">
				<h3>Menu</h3>
				<br>
				<ul class="nav nav-pills nav-stacked" style="width: 80%">
					<li class="active"><a href="list-student.php">List students</a></li>
					<li><a href="add-student.php">Add new student</a></li>
				</ul>

				<hr class="hidden-sm hidden-md hidden-lg">
			</div>
			<!-- end side -->

			<!-- main -->
			<div class="col-sm-8">
				<h2>List Student</h2>
				<br>

				<div>
					<a href="add-student.php">Add new Student</a>
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
						require_once 'student-manager.php';
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
			</div>
			<!-- end main -->			
		</div>
		
	</div>
	<!-- END CONTENT -->

	<!-- FOOTER -->
	<div class="jumbotron text-center" style="margin-bottom: 0">
		<p>Design and coding by NCH</h5>
		<h5>Danang, Oct 30 2018</p>
	</div>
	<!-- END FOOTER --> -->

</body>
</html>