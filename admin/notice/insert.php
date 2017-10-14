<?php
   include '../../public/db.php';
   $content=addslashes(htmlspecialchars($_POST['content']));
   $t=time()+21600;
   $sql="insert into notice (content,time) values ('{$content}','{$t}')";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>