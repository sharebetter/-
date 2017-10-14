<?php
   include '../../public/db.php';
   $title=$_POST['title'];
   $content=addslashes(htmlspecialchars($_POST['content']));
   $t=time()+21600;
   $sql="insert into good_talk (title,content,time) values ('{$title}','{$content}','{$t}')";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>