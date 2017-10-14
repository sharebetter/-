<?php
   include '../../public/db.php';
   $title=$_POST['title'];
   $content=addslashes(htmlspecialchars($_POST['content']));
   $classid=$_POST['class_id'];
   $t=time()+21600;
   $sql="insert into topic (title,content,class_id,time) values ('{$title}','{$content}','{$classid}','{$t}')";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>