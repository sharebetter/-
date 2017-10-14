<?php
   include '../public/db.php';
   session_start();
   if(!isset($_SESSION['user_name'])){
   	header("location:login.php");
   	exit;
   }
   $content=$_POST['conten'];
   $topic_id=$_POST['topic_id'];
   $userid=$_SESSION['user_id'];
   // echo $topic_id.$userid;
    $sql="insert into content (user_id,topic_id,user_content) values ('{$userid}','{$topic_id}','{$content}')";
    $rst=$pdo->query($sql);
    
    //增加views的数值
    $sqlId="select views,comment_times from topic where id={$topic_id}";
    $rmt=$pdo->prepare($sqlId);
    $rmt->execute();  
    $rowsTime=$rmt->fetch();
    $views=++$rowsTime['views'];
    $comment_times=++$rowsTime['comment_times'];
    $sqlViews="update topic set views={$views},comment_times={$comment_times} where id={$topic_id}";
    $rstviews=$pdo->prepare($sqlViews);
    $rstviews->execute();
    if($rst){
    	echo "<script>window.location.href=document.referrer;</script>";
    }
?>