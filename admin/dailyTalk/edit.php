<?php 
  include '../../public/db.php';
  $id=$_GET['id'];
  $sql="select * from daily_talk where id='{$id}'";
  $rst=$pdo->query($sql);
  $row=$rst->fetch();
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>blog后台</title>
<link rel="stylesheet" type="text/css" href="../../public/bs/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/bs/css/style.css">
<link rel="stylesheet" type="text/css" href="../../public/bs/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="../../public/bs/images/icon/icon.png">
<link rel="shortcut icon" href="../../public/bs/images/icon/favicon.ico">
<script src="../../public/bs/js/jquery.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <div class="container" style="margin-top: 100px">
    <form action="update.php" method='post'>
      <label><h3><a>每日一句:</a></h3></label>
       <p><textarea name="content" class="form-control" rows="7" style="resize: vertical;"><?php echo $row['content']?></textarea></p>
      <div class="form-group">
        <input type="hidden" name="id" value='<?php echo $row['id']?>'> 
        <input type="submit" class="btn btn-primary" value="修改">
        <input type="reset" class='btn btn-danger'>
      </div>
    </form>   
  </div>
</section>



</body>
</html>