<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giải phương trình bậc 2</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<h1>Tìm nghiệm phương trình bậc 2</h1>
	<div class="form-group col-md-6">
		<form action="" method="post" accept-charset="utf-8">
			<input type='text' name="inputA" id="a" style=" width: 40px" value="">x<sup>2</sup>
			 + <input type="text" name="inputB" id="b" style=" width: 40px" value="">x
			 + <input type="text" name="inputC" id="c" style=" width: 40px" value="">
			 = 0
			<br> <br>

			<div class="form-group">
				<input class="form-control" style="width: 60px" type="button" name="btnTinh" onclick="calculatePT()" value="Tính">
			</div>
		</form>

		<div class="form-group hidden" id="ketqua">
		</div>
	</div>

	<script>
		function calculatePT()
		{
			if (validateInput())
			{
				var A = $('#a').val();
				var B = $('#b').val();
				var C = $('#c').val();
				
				$('#ketqua').load(' #ketqua', function(){
					if (A == 0 && B == 0) {
						$('#ketqua').removeClass('hidden');
						var txtKetQua = document.createElement('p');
						if (C == 0) {
							txtKetQua.innerHTML = "<label>Kết quả: </label> <br>Phương trình có vô số nghiệm";
							$('#ketqua').append(txtKetQua);
						}
						else {
							txtKetQua.innerHTML = "<label>Kết quả: </label> <br>Phương trình vô nghiệm";
							$('#ketqua').append(txtKetQua);
						}
					}
					else {
						$('#ketqua').removeClass('hidden');
						load_ajax();
					}
				});
				
			}
		}

		function load_ajax()
		{
			$.ajax({
				url: '/practice/giaiptbac2/backend.php',
				type: 'POST',
				dataType: 'text',
				data: {
					a : $('#a').val(),
					b : $('#b').val(),
					c : $('#c').val(),
				},
				success : function(result){
					result = "<label>Kết quả: </label> <br>"+ result;
					$('#ketqua').html(result);
				}
			});
			
		}


		function validateInput()
		{
			var A = $('#a').val();
			var B = $('#b').val();
			var C = $('#c').val();
			if (A == "" || B == "" || C == "") {
				alert("Chưa nhập đầy đủ giá trị")
				return false;
			}
			else if (isNaN(A) || isNaN(B) || isNaN(C))
			{
				alert("Giá trị nhập vào không phải là số");
				return false;
			}
			return true;
		}
	</script>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>