<?php
include '../public/db.php';
session_start();
    $name=$_POST['username'];
    $psw=md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE username='{$name}' and password='{$psw}' and isadmin='0'";
    $rst = $pdo->query($sql);
	$row=$rst->fetch();
	if($row){
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_name']=$row['username'];
        $_SESSION['img']=$row['img'];        
        if(isset($_SESSION['class_id'])){
		   if($_SESSION['class_id']==5){
		   	 header("location:../addarticle.php");		     
		   }else{
		   	 header("location:../indexClass.php");
		   }    
	    }elseif(isset($_POST['topic_id'])){	
	       $id=$_POST['topic_id'];
		 header("location:../index.php?id={$id}");
	    }else{
	      header("location:../index.php");
	    }
	}
	else{
		 echo "<script>alert('用户名或密码错误！');</script>";
		echo "<script>location='../index.php';</script>";
	}
?>