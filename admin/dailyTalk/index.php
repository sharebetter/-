<?php
    include '../../public/db.php';    
    $sql = "SELECT * FROM daily_talk";
	  $smt=$pdo->prepare($sql);
	  $smt->execute();  
	  $rows=$smt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>index</title>
	<link rel="stylesheet" href="../../public/bs/css/bootstrap.min.css">
	<script src="../../public/bs/js/bootstrap.min.js"></script>
	<script src="../../public/bs/js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		 <table class='table table-striped table-hover table-bordered' style="margin-top: 20px">
			<tr>
				<th>编号</th>
				<th>每日一句</th>
				<th>时间</th>		
				<th>修改</th>
				<th>删除</th>
			</tr>	
			<?php 
				foreach($rows as $row){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";					
					echo "<td>{$row['content']}</td>";
					echo "<td>".date('20y-m-d h:i:s',$row['time'])."</td>";
					echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-success'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger delete'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	 <div>       
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