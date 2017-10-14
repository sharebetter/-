<?php
include '../public/db.php';
    $name=$_POST['user'];
    $psw=$_POST['psw'];
    $sql = "SELECT * FROM user WHERE username='{$name}' and password='{$psw}' and isadmin='1'";
    $rst = $pdo->query($sql);
	$row=$rst->fetch();
	echo $row;
	if($row){
		 header("location:index.php");
	}
	else{
		 header("location:login.php");
	}
?>