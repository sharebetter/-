<?php
   include '../../public/db.php';
   $title=$_POST['title'];
   $id=$_POST['id'];
   $userid=$_POST['user_id'];
   $classid=$_POST['class_id'];   
   $content=addslashes(htmlspecialchars($_POST['content']));
   $t=time()+21600;
    $sql="insert into topic (title,content,class_id,user_id,time) values ('{$title}','{$content}','{$classid}','{$userid}','{$t}')";
   $rst=$pdo->query($sql);
   if($rst){
         //删除审核字段里的文章        
         $sql2 = "delete from article where id={$id}";
         $rst2 = $pdo->query($sql2);
         if($rst2){
              echo '<script>location="index.php"</script>';
         }
   	 
   }
?>