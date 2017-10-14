<?php 
include '../../public/db.php';
   $user_id=$_POST['id'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $sql="update user set username='{$username}',password='{$password}'where id={$user_id}";
  $rst = $pdo->query($sql);

if($rst){
	echo '<script>location="index.php"</script>';
}else{
  	echo "修改失败";
  }
?>