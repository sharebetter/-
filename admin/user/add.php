<?php 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>add</title>
	<link rel="stylesheet" href="../../public/bs/css/bootstrap.min.css">
	<script src="../../public/bs/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 80px">
		<form action="insert.php" method='post'>
			<div class="form-group">
				<label for="">用户名:</label>
				<input type="text" class="form-control" name='username'>
			</div>
			<div class="form-group">
				<label for="">密码:</label>
				<input type="password" class="form-control" name='password'>
			</div>
			<div class="form-group">
				<input type="submit" class='btn btn-primary' value="提交">
				<input type="reset" class='btn btn-danger'>
			</div>
		</form>		
	</div>
	
</body>
</html>