<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>left</title>
	<style>
		*{
			font-family: 微软雅黑;
			text-decoration:none;			
		}
		body{
			margin-left:20px;
		}
		h4{
			cursor: pointer;
			background: #272822;
			border-radius:5px;
			text-align: center;
			color:#fff;
		}

		h4:hover{
			color:#aff;
		}

		div{
			display: none;
		}

		p{
			background: #E4393C;
			border-radius:5px;
			text-align: center;
		}

		p a{
			color:#fff;
		}
	</style>
	<script src='public/js/jquery.js'></script>
</head>
<body>
	<h4 style="margin-top:100px">用户管理</h4>
	<div>
		<p><a href='user/index.php' target='right'>|-查看用户</a></p>
		<p><a href='user/add.php' target='right'>|-添加用户</a></p>
	</div>
	
	<h4>分类/公告</h4>
	<div>
		<p><a href='banner/index.php' target='right'>|-查看分类</a></p>
		<p><a href='banner/add.php' target='right'>|-添加分类</a></p>
		<p><a href='notice/index.php' target='right'>|-查看公告</a></p>
		<p><a href='notice/add.php' target='right'>|-添加公告</a></p>
	</div>
	
	<h4>发布内容</h4>
	<div>
		<p><a href='content/index.php' target='right'>|-查看内容</a></p>
		<p><a href='content/add.php' target='right'>|-添加内容</a></p>
	</div>
	<h4>今日推荐</h4>
	<div>
		<p><a href='goodTalk/index.php' target='right'>|-今日良言</a></p>
		<p><a href='goodTalk/add.php' target='right'>|-添加内容</a></p>
		<p><a href='dailyTalk/index.php' target='right'>|-每日一句</a></p>
		<p><a href='dailyTalk/add.php' target='right'>|-添加内容</a></p>
	</div>
	<h4>文章审核</h4>
	<div>
		<p><a href='article/index.php' target='right'>|-查看文章</a></p>
	</div>
</body>
<script>
$('h4').click(function(){
	$(this).next().toggle();
	$('div').not($(this).next()).hide();
});
</script>
</html>