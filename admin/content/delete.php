<?php
include '../../public/db.php';
   $id=$_GET['id'];
   $sql = "delete topic,content from topic,content where topic.id={$id} and topic.id=content.topic_id";
   $rst = $pdo->query($sql);
   if($rst){
   	 header("location:index.php");
   	 // echo "string";
   }
?>