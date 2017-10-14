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
	<div class="container" style="margin-top: 100px">
		<form action="insert.php" method='post'>
			<label><p>栏目名称:</p></label>
			<p><input type="text" class="form-control" name='barname'></p>
			<input type="submit" class="btn btn-primary" value="添加">
					<input type="reset" class='btn btn-danger'>
		</form>		
	</div>
	
</body>
</html>