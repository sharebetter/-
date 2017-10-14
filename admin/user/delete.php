<?php
include '../../public/db.php';
   $id=$_GET['id'];
   $sql = "delete from user where id='{$id}'";
   $rst = $pdo->query($sql);
   if($rst){
   	 header("location:index.php");
   	 // echo "string";
   }
?>