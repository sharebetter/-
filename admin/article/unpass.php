<?php
include '../../public/db.php';
   $id=$_GET['id'];
   $sql = "delete from article where id={$id}";
   $rst = $pdo->query($sql);
   if($rst){
   	 header("location:index.php");
   }
?>