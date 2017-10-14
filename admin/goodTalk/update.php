<?php
   include '../../public/db.php';
   $title=$_POST['title'];
   $id=$_POST['id'];
   $content=addslashes(htmlspecialchars($_POST['content']));
   $t=time()+21600;
   $sql="update good_talk set title='{$title}',content='{$content}',time='{$t}' where id='{$id}'";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>