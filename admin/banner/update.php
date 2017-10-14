<?php 
include '../../public/db.php';
   $user_id=$_POST['id'];
  $username = $_POST['username'];
  $sql="update class set name='{$username}' where id={$user_id}";
  $rst = $pdo->query($sql);

if($rst){
	echo '<script>location="index.php"</script>';
}else{
  	echo "修改失败";
  }
?>