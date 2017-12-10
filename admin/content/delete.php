<?php
include '../../public/db.php';
   $id=$_GET['id'];
   $sql = "delete from topic where id={$id}";   
   $rst = $pdo->query($sql);
   if($rst){
   	$sql2 = "delete from content where topic_id={$id}";
   	$rst2 = $pdo->query($sql2);
   	if($rst2){
      header("location:index.php");
   	}   	 
   	 // echo "string";
   }
?>