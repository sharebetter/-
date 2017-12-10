<?php 
include '../public/db.php';
session_start();
//图片上传;
if($_FILES['img']['tmp_name']){
	$sfile=$_FILES['img']['tmp_name'];
	$uploaddir='uploads';
	if(!file_exists($uploaddir)){
		mkdir($uploaddir);
	}
	$filesize=$_FILES['img']['size'];

	//创建上传日期目录
	$year=date('Y');
	$month=date('m');
	$day=date('d');
	$datedir=$uploaddir.'/'.$year.'-'.$month.'-'.$day;
	if(!file_exists($datedir)){
		mkdir($datedir);
	}

	// 获取文件后缀
	$farr=explode('.',$_FILES['img']['name']);
	$fext=array_pop($farr);

	//加工文件名
	$frand=time().mt_rand();

	//最终上传路径和文件名
	$dfile=$datedir.'/'.$frand.'.'.$fext;

	move_uploaded_file($sfile,$dfile);
 }
  $user_id=$_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $change=false;  	
  if($password!="######"){
    $password = md5($_POST['password']);
    $change=true;  	
  }
  $oldimg=$_POST['oldimg'];
  if(!isset($dfile)){
  	 if($change){
	  $sql="update user set username='{$username}',password='{$password}' where id={$user_id}";	    	 	
  	 }else{
	  $sql="update user set username='{$username}' where id={$user_id}";	    	 	  	
	 }
  }else{
  	if($change){
  		$sql="update user set username='{$username}',password='{$password}',img='{$dfile}' where id={$user_id}";
  	}else{
       $sql="update user set username='{$username}',img='{$dfile}' where id={$user_id}";
  	}	
     $_SESSION['img']=$dfile;        
     unlink($oldimg);
  }
  $rst = $pdo->query($sql);
if($rst){
	$_SESSION['user_name']=$username;
	echo "<script>alert('修改成功！')</script>";	
	echo '<script>location="info.php"</script>';
}else{
	echo "<script>alert('修改失败！')</script>";	
	echo '<script>location="info.php"</script>';  	
  }
?>
