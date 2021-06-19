<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		
	</head>
	<body>
		<div class="container">
			<h1>Javascript Form Validation</h1>
			<form name="myForm" action="" onsubmit="return validateForm()" method="post"> 
				<div class="mb-3">
					<label for="fname" class="form-label">First name</label>
					<input type="text" name="fname" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="First name....">
					<span id="demo" style="color:red;"></span>
					<span id="demo1" style="color:green;font-weight:600;"></span>
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Last name</label>
					<input type="text" name="lname" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Last name....">
					<span id="demo2" style="color:red;"></span>
					<span id="demo22" style="color:green;font-weight:600;"></span>
				</div>
				<button type="submit" class="btn brn-sm btn-success" name="actions" value="vetifys">Submit</button>
				<a href="index.php" class="btn brn-sm btn-warning">Refresh</a>
			</form>
		</div>
		<script type="text/javascript" src="Validator.js"></script>
	</body>
</html>