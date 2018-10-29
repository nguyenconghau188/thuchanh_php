
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Students Manager</title>
 	<link rel="stylesheet" href="">
 	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>


 	<h2 style="margin-left: 100px">Add Student</h2>

	<div class="col-md-4">
		<form action="./Controller/addController.php" method="POST" name="add-student" id="ad-student" accept-charset="utf-8">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label>Birthday</label>
				<input class="form-control" id="birthday" name="birthday">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label>Class</label>
				<input class="form-control" id="classStu" name="classStu">
			</div>
			<div class="form-group">
				<!-- <input type="submit" name="calculate" value="Tính"> -->
				<input  class="form-control" type="submit" name="submitStudent" style="width: 100px; margin-left: 150px;" value="Add"></input>
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