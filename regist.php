<?php 
session_start();
include 'public/db.php';
$vcode=$_SESSION['code'];
$fcode=$_POST['fcode'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$newVcode=strtolower(str_replace(' ','',$vcode));
$newFcode=strtolower(str_replace(' ','',$fcode));

$sql="select count(*) from user where username='{$username}'";//注意字符串用引号
$rst=$pdo->prepare($sql);
$rst->execute();
$rowsNum=$rst->fetchColumn();
if($rowsNum!=0){
   echo "<script>alert('该用户名已被注册');</script>";
   echo "<script>location='index.php'</script>";	 
}else{
	if($newFcode===$newVcode){
		 $rand=rand(1,5);
		 $sfile="user/uploads/{$rand}.jpg";
		 $farr=explode('.',$sfile);
	     $fext=array_pop($farr);
		 $frand=time().mt_rand();
        //创建文件夹
        $uploaddir='user/uploads';
		// if(!file_exists($uploaddir)){
		// 	mkdir($uploaddir);
		// }
		$year=date('Y');
		$month=date('m');
		$day=date('d');
		$datedir=$uploaddir.'/'.$year.'-'.$month.'-'.$day;
		if(!file_exists($datedir)){
			mkdir($datedir);
		}
	    $dfile=$datedir.'/'.$frand.'.'.$fext;
		copy($sfile,$dfile);
        $odfile='uploads/'.$year.'-'.$month.'-'.$day.'/'.$frand.'.'.$fext;
		 $sql2="insert into user(username,password,img) values ('{$username}','{$password}','{$odfile}')";
		  $smt=$pdo->prepare($sql2);
		  if($smt->execute()){
             echo "<script>alert('注册成功！');</script>";
             $lastId=$pdo->lastInsertId();	 
             $_SESSION['user_id']=$lastId;
             $_SESSION['user_name']=$username; 	 
             $_SESSION['img']=$odfile; 	              
		     if(isset($_POST['topic_id'])){	
		       $id=$_POST['topic_id'];
			 header("location:index.php?id={$id}");
		    }else{
		      header("location:index.php");
		    }
		  }
		$_SESSION['code']=time();
		// echo '<br>'.$_SESSION['code'];
		//验证成功后用来改变$_SESSION['code']的值 防止点浏览器返回 旧验证码仍可用
	}else{
		echo "<script>alert('验证码输入有误');</script>";
		echo "<script>location='index.php'</script>";	
	}
}
?>