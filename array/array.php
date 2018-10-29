<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Học array</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php 
	$authors = array(
	    array(
	        'name' => 'Nguyễn Văn Cường',
	        'blog' => 'freetuts.net',
	        'position' => 'admin'
	    ),
	    array(
	        'name' => 'Trương Phúc Hoài Minh',
	        'blog' => 'freetuts.net',
	        'position' => 'author'
	    ),
	    array(
	        'name' => 'Hoàng Văn Tuyền',
	        'blog' => 'freetuts.net',
	        'position' => 'author'
	    ),
	    array(
	        'name' => 'Nguyễn Tình',
	        'blog' => 'freetuts.net',
	        'position' => 'author'
	    )
	);

	$name = isset($_POST['name']) ? $_POST['name'] : false;
	$blog = isset($_POST['blog']) ? $_POST['blog'] : false;
	$position = isset($_POST['position']) ? $_POST['position'] : false;
	
	if ($name != "" && $blog != "" && $position !="") {
		$auth = array(
			'name' => $name,
			'blog' => $blog,
			'position' => $position
		);

		array_push($authors, $auth);
	}
	else {
		echo "<script>alert('Chưa nhập đủ thông tin');</script>";
	}

		
	?>

	<div class="col-md-6">
		<h2>Thêm danh sách</h4>
		<br>
		<form action="" method="POST" id="formSubmit" accept-charset="utf-8">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" style="width: 400px" type="text" name="name" id="name" value="">
			</div>
			<div class="form-group">
				<label>Blog</label>
				<input class="form-control" style="width: 400px" type="text" name="blog" id="blog" value="">
			</div>
			<div class="form-group">
				<label>Position</label>
				<input class="form-control" style="width: 400px" type="text" name="position" id="position" value="">
			</div>
			<div class="form-group">
				<br>
				<input class="form-control" style="width: 400px; background-color: #7CFC00;" type="button" name="btnSubmit" id="btnSubmit" value="Thêm">
			</div>
		</form>
	</div>
	

	<div class="table-responsive" style="width: 50%">
		<h2>Danh sách</h2>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Blog</th>
				<th>Position</th>
				<th>Delete</th>
			</tr>
			<?php foreach ($authors as $auth){
				echo '<tr>';
				echo "<td>".$auth['name']."</td>";
				echo "<td>".$auth['blog']."</td>";
				echo "<td>".$auth['position']."</td>";
				echo "<td id='xoa'><a>Xóa</a></td>";
				echo '</tr>';
			} ?>		
		</table>
	</div>
	<script type="text/javascript">
		$('#btnSubmit').click(function(){
			$('#formSubmit').submit();
		});
	</script>
	




</body>
</html>