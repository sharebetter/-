<?php 
  include '../public/db.php';
  include '../public/same.php';
   session_start();
   $id=$_SESSION['user_id'];
   $sql="select * from user where id=$id";
   $rst=$pdo->prepare($sql);
   $rst->execute();  
   $rows=$rst->fetch();
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ZHM博客</title>
<link rel="stylesheet" type="text/css" href="../public/bs/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/bs/css/nprogress.css">
<link rel="stylesheet" type="text/css" href="../public/bs/css/style.css">
<link rel="stylesheet" type="text/css" href="../public/bs/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="../public/bs/images/icon/icon.png">
<link rel="shortcut icon" href="../public/bs/images/icon/favicon.ico">
<script src="../public/bs/js/jquery-2.1.4.min.js"></script>
<script src="../public/bs/js/nprogress.js"></script>
<script src="../public/bs/js/jquery.lazyload.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
<style>
.title{
	text-align: center;
	color: #999;
}
.headimg{
	margin:0 auto;
}
.head{
  width: 50px;
  height:50px;
  border-radius: 50%
}
*{
  cursor: pointer;
}
</style>
</head>
<body class="user-select">
<header class="header">
  <nav class="navbar navbar-default" id="navbar">
    <div class="container">
      <div class="header-topbar link-border">
        <ul class="site-nav hidden-xs topmenu">
          <li><a href="tags.html">标签云</a></li>
          <li><a href="readers.html" rel="nofollow">读者墙</a></li>
          <li><a href="links.html" rel="nofollow">友情链接</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" rel="nofollow">关注本站 <span class="caret"></span></a>
            <ul class="dropdown-menu header-topbar-dropdown-menu">
              <li><a data-toggle="modal" data-target="#WeChat" rel="nofollow"><i class="fa fa-weixin"></i> 微信</a></li>
              <li><a href="#" rel="nofollow"><i class="fa fa-weibo"></i> 微博</a></li>
              <li><a data-toggle="modal" data-target="#areDeveloping" rel="nofollow"><i class="fa fa-rss"></i> RSS</a></li>
            </ul>
          </li>
        </ul>
        <?php if(!isset($_SESSION['user_id'])){ echo "<script>location='index.php'</script>"; ?>        
        <?php }else{ echo "<input type='hidden' id='jmu'>"; ?>
          <h4>欢迎<a style='margin-left: 15px' href='info.php' class="login"> <?php echo $_SESSION['user_name']?><img class='head' <?php echo "src='{$_SESSION['img']}'" ?></a>
           <a style='margin-left: 15px' class="login" id='loginOut' href="user/loginout.php"> 退出</a></h4>
        <?php } ?> </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <h1 class="logo hvr-bounce-in"><a href="../index.php" title=""><img src="../public/bs/images/logo.png" alt=""></a></h1>
      </div>
      <div class="collapse navbar-collapse" id="header-navbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden-index"><a data-cont="平台首页" href="../index.php">平台首页</a></li>
          <?php 
           foreach($rowsClass as $row){
              if($row['id']==5) {
                 echo "<li><a href='../addarticle.php?classid={$row['id']}'>{$row['name']}</a></li>"; 
             }else{
               echo "<li><a href='../indexClass.php?classid={$row['id']}'>{$row['name']}</a></li>";  
             }
          }
          ?>  
        </ul>
        <form class="navbar-form visible-xs" action="../index.php" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> 
          </div>
        </form>
      </div>
    </div>
  </nav>
 </header>
<body>
<section class="container">
  <div class="content-wrap">
    <div class="content">
	<article class='article'>
	  <section class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 main" id="main">
            <div class="row">
              <form action="update.php" method='post' enctype='multipart/form-data' class="add-article-form">
                <div class="col-md-12" style='text-align: center;'>
                  <h1 class="page-header">个人中心</h1>
				     <div class="headimg">

                       <a title=""><img class="thumb" <?php echo "src='{$rows['img']}'"; ?> alt=""></a>
                       <p style="margin-top:20px"></p>
                       <p>
                        <label for="">请选择文件:</label>			
					    <input type="file" name="img" id="" style='margin:8px 40%;'>
					   </p>
				     </div>     
				       
		            <div class="form-group" style='width: 30%;margin:10px auto 0' >
						<label for="">用户名:</label>
						<input type="text" class="form-control" name='username' required autofocus autocomplete="off" <?php echo "value='{$rows['username']}'"; ?>>
					</div>
					<div class="form-group" style='width: 30%;margin:0 auto'>
						<label for="">密码:</label>
						<input type="password" class="form-control" name='password' required autofocus autocomplete="off" placeholder="请输入原密码或新密码">
					</div>
					<input type="hidden" name="id" value='<?php echo $rows['id']?>'>				
					<input type="hidden" name="oldimg" <?php echo "value='{$rows['img']}'";?>>				
					<div class="form-group" style='margin-top:20px;'>
						<input type="submit" class='btn btn-primary' value="提交">
						<input type="reset" class='btn btn-danger'>
					</div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </article>	  
	</div>
	</div>  
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">网站公告</a></li>
          <li role="presentation"><a href="#centre" aria-controls="centre" role="tab" data-toggle="tab">会员中心</a></li>
          <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane notice active" id="notice">
            <ul>         
            <?php foreach ($rowsnotice as $row) {              
                echo "<li>
                <time>".date('m-d',$row['time'])."</time>
                <a data-toggle='modal' data-target='#noticeModal'>{$row['content']}</a></li> ";
              } ?>      
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane centre" id="centre">
            <h4>需要登录才能进入会员中心</h4>
            <p> <a data-toggle="modal" data-target="#loginModal" class="btn btn-primary">立即登录</a> <a href="javascript:;" class="btn btn-default">现在注册</a> </p>
          </div>
          <div role="tabpanel" class="tab-pane contact" id="contact">
            <h2>Email:<br />
              <a href="mailto:4041812@qq.com" data-toggle="tooltip" data-placement="bottom" title="4041812@qq.com">4041812@qq.com</a></h2>
          </div>
        </div>
      </div>
      <div class="widget widget_search">
        <form class="navbar-form" action="../index.php" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div>
    </div>
    <div class="widget widget_sentence">
      <h3>每日一句</h3>
      <div class="widget-sentence-content">
        <h4><?php echo date('20y年m月d日',$t).' 星期'.mb_substr( "日一二三四五六",date("w"),1,"utf-8" );  ; ?></h4>
        <p style="line-height: 22px"><?php echo htmlspecialchars_decode($rowsdaily['content']); ?></p>
      </div>
    </div>
    <div class="widget widget_hot">
      <h3>热门文章</h3>
      <ul>
        <?php 
         foreach($rowshot as $row){      
       ?>
        <li><a href='../index.php?<?php echo "id={$row['id']}"; ?>'><span class="thumbnail"><img class="thumb" data-original="images/excerpt.jpg" <?php echo "src='{$row['img']}'"; ?> alt=""></span><span class="text"><?php echo "{$row['title']}" ?> </span><span class="muted" style="display: block;line-height: 30px"><i class="glyphicon glyphicon-time"></i> <?php echo date('20y-m-d h:i:s',$row['time']); ?> </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> <?php echo "{$row['views']}"; ?></span><span class="muted"><i class="glyphicon glyphicon-comment"></i> <?php echo "{$row['comment_times']}" ?></span></a></li>
        <?php } ?>
      </ul>
    </div>
  </aside>
</section>
<footer class="footer">
  <div class="container">
    <p>&copy; 2016 <a href="">ylsat.com</a> &nbsp; <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">豫ICP备20151109-1</a> &nbsp; <a href="sitemap.xml" target="_blank" class="sitemap">网站地图</a></p>
  </div>
  <div id="gotop"><a class="gotop"></a></div>
</footer>

<!-- 公告模态 -->
<div id="noticeModal" class='modal fade'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="close" data-dismiss='modal'>&times;</div>
            <h3>网站公告</h3>    
          </div>
          <div class="modal-body">
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane notice active" id="notice">
            <ul>            
             <?php foreach ($rowsnotice as $row) {              
                echo "<li style='color:#999999;list-style: binary;margin-left:10px'>                
                <p style='color:#999999;width:520px;'> {$row['content']}</p>
                <p style='text-align:right'>".date('m-d',$row['time'])."</p>
                </li> ";
              } ?>        
            </ul>
          </div>
          </div>
          <div class="modal-footer">
            <button class='btn btn-primary' data-dismiss='modal'>我知道了</button>          </div>
        </div>
      </div>  
</div>

<script src="../public/bs/js/bootstrap.min.js"></script> 
<script src="../public/bs/js/jquery.ias.js"></script> 
<script src="../public/bs/js/scripts.js"></script>
</body>
</html>