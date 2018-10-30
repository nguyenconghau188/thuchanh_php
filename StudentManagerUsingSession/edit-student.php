
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
	<div class="container" style="margin-top: 20px; margin-bottom: 20px">
		<div class="row">
			<!-- side -->
			<div class="col-sm-4">
				<h3>Menu</h3>
				<br>
				<ul class="nav nav-pills nav-stacked" style="width: 80%">
					<li><a href="list-student.php">List students</a></li>
					<li><a href="add-student.php">Add new student</a></li>
				</ul>

				<hr class="hidden-sm hidden-md hidden-lg">
			</div>
			<!-- end side -->

			<!-- main -->
			<div class="col-sm-8">
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
				<h2>Edit Student</h2>
				<br>

				<div  class="col-sm-8">
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
							<input  class="form-control" type="submit" name="submitStudent" style="width: 150px; background-color: #4169E1; color: white;" value="Edit"></input>
						</div>
					</form>
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