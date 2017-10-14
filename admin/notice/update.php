<?php
   include '../../public/db.php';
   $id=$_POST['id'];
   $content=addslashes(htmlspecialchars($_POST['content']));
   // $content=preg_replace("/\r\n|\r|\n/","",$_POST['content']);
   $t=time()+21600;
   $sql="update notice set content='{$content}',time='{$t}' where id='{$id}'";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>