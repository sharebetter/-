<?php
   include '../../public/db.php';
   $barname=$_POST['barname'];
 
   $sql="insert into class (name) values ('{$barname}')";
   $rst=$pdo->query($sql);
   if($rst){
   	  echo '<script>location="index.php"</script>';
   }
?>