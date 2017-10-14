<?php
   include '../../public/db.php';
   $username=$_POST['username'];
   $password=md5($_POST['password']);
   $sql="select * from user where username='{$username}'";
   $sql2="insert into user (username,password) values ('{$username}','{$password}')";
	$rst= $pdo->query($sql);

	if($row=$rst->fetch()){
		 echo '<h3>该用户名已被注册</h3>';
	}else{
		if($pdo->query($sql2)){
		   echo '<script>location="index.php"</script>';
		}
		else{
			echo '添加失败';
		}
	}
?>