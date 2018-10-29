<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giải phương trình bậc nhất</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<h1>Chương trình giải phương trình bậc 1: ax + b = c</h1>
	<div class="col-md-4">
		<form action="" method="post" name="calculate" id="myForm" accept-charset="utf-8">
			<div class="form-group">
				<label>Nhập a</label>
				<input class="form-control" id="inputA" name="inputA">
			</div>
			<div class="form-group">
				<label>Nhập b</label>
				<input class="form-control" id="inputB" name="inputB">
			</div>
			<div class="form-group">
				<label>Nhập c</label>
				<input class="form-control" id="inputC" name="inputC">
			</div>
			<div class="form-group">
				<!-- <input type="submit" name="calculate" value="Tính"> -->
				<input class="form-control" type="button" name="calculate" onclick="calculatePT()" value="Tính"></input>
			</div>
		</form>

		<div class="form-group hidden" id="ketqua">
			<label>Kết quả</label>
			<input class="form-control" type="text" id="txtKetqua">
		</div>
	</div>
	
	<script>
		function validateForm(){
			var a = document.forms["myForm"]["inputA"].value;
			var b = document.forms["myForm"]["inputB"].value;
			var c = document.forms["myForm"]["inputC"].value;

			if ( a == "" || b == "" || c == "")
			{
				alert("chưa nhập đầy đủ tham số!");
				return false;
			}
			else if (isNaN(a) || isNaN(b) || isNaN(c))
			{
				alert("đéo phải số!");
				return false;
			}
			else if (a == 0)
			{
				alert("a phải khác 0!");
				return false;
			}
			return true;
		}

		function calculatePT(){
			if (validateForm())
			{
				alert("submit");
				load_ajax();
			}
		}

		function load_ajax()
		{
			var a = document.forms["myForm"]["inputA"].value;
			var b = document.forms["myForm"]["inputB"].value;
			var c = document.forms["myForm"]["inputC"].value;
			$.ajax({
				url: '/practice/giaiptbac1/backend.php',
				type: 'POST',
				dataType: 'text',
				data: {
					value1 : a,
					value2 : b,
					value3 : c
				},
				success : function(result){
					if (result) {
						$('#ketqua').removeClass('hidden');
						$('#txtKetqua').attr('value', result);
					}
				}
			});
			
		}

	</script>
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>


