<?php 
include '../../public/db.php';
$user_id=$_GET['id'];
$sql="select * from user where id = '{$user_id}'";
$rst = $pdo->query($sql);
$row = $rst->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>edit</title>
	<link rel="stylesheet" href="../../public/bs/css/bootstrap.min.css">
	<script src="../../public/bs/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 80px">
		<form action="update.php" method='post'>
			<p>用户名:</p>
			<p><input type="text" class="form-control" name='username' value='<?php echo $row['username']?>'></p>

			<p>密码:</p>
			<p><input type="password" class="form-control" name='password'></p>

			<input type="hidden" name="id" value='<?php echo $row['id']?>'>	
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="修改">
				<input type="reset" class='btn btn-danger'>
			</div>
		</form>		
	</div>
</body>
</html>