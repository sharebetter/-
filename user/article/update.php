<?php
   include '../../public/db.php';
   $title=$_POST['title'];
   $id=$_POST['id'];
   $class_id=$_POST['class_id'];
   $content=addslashes(htmlspecialchars($_POST['content']));
   $t=time()+21600;
   $sql="update topic set title='{$title}',content='{$content}',time='{$t}',class_id='{$class_id}' where id='{$id}'";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>