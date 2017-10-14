<?php
   include '../../public/db.php';
   $title=$_POST['title'];
   $content=addslashes(htmlspecialchars($_POST['content']));
   $class_id=$_POST['class_id'];
   $user_id=$_POST['user_id']; 
   // echo $title.' '.$content.' '.$class_id.' '.$user_id; 
   $t=time()+21600;
   $sql="insert into article (title,content,class_id,user_id,time) values ('{$title}','{$content}','{$class_id}','{$user_id}','{$t}')";
   $rst=$pdo->query($sql);
   if($rst){
        echo "<script>alert('发布成功！请耐心等待管理员审核')</script>";      
   	  echo '<script>location="../../addarticle.php"</script>';
   }
?>