<?php 

	session_start();

	// $arr=$_SESSION['shops'];
	$classid=$_SESSION['class_id'];
	$_SESSION=array();
	$_SESSION['class_id']=$classid;
	// $_SESSION['shops']=$arr;
	if(isset($_SESSION['class_id'])){
	  if($_SESSION['class_id']==5){
		   header("location:../addarticle.php");		     
	  }else{
		   header("location:../indexClass.php");
		   }    	      
	}else{
	 header("location:../index.php");
	}
?>