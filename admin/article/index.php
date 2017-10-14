<?php
    include '../../public/db.php';
    include '../../public/page.php';
    
    $sqlTot="select count(*) from article";
	$smtTot=$pdo->prepare($sqlTot);
	$smtTot->execute();
	$tot=$smtTot->fetchColumn();
	$page=new Page($tot,9);

    $sql = "SELECT article.*,user.username,class.name FROM article,user,class where article.user_id=user.id and class.id=article.class_id order by article.id desc limit {$page->offset},{$page->length}";
    $rst = $pdo->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>index</title>
	<link rel="stylesheet" href="../../public/bs/css/bootstrap.min.css">
	<script src="../../public/bs/js/bootstrap.min.js"></script>
	<script src="../../public/bs/js/jquery.min.js"></script>	
</head>
<body>
	<div class="container">
		 <table class='table table-striped table-hover table-bordered' style="margin-top: 50px">
			<tr>
				<th>栏目</th>
				<th>标题名称</th>
				<th>发帖人</th>				
				<th>待审核</th>
			</tr>	
			<?php 
				while($row=$rst->fetch()){
					echo "<tr>";
					echo "<td>{$row['name']}</td>";
					echo "<td>{$row['title']}</td>";
					echo "<td>{$row['username']} (Id:{$row['user_id']})</td>";
					echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-success' >查看</a></td>";					
					echo "</tr>";
				}
			?>
		</table>
		  <div>
	        <?php 
				$page->show();
			?>
	      </div>
	</div>
<script>
  $('.delete').click(function(){
		cf=confirm('您确认删除吗?');
		if(!cf){
			return false;
		}
	});
</script>
</body>
</html>