
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>add</title>
  <link rel="stylesheet" href="../../public/bs/css/bootstrap.min.css">
  <script src="../../public/bs/js/bootstrap.min.js"></script>
  <style>
   a:hover{
    text-decoration: none;
    color: red;
    -webkit-user-select: none; /* Chrome/Safari/Opera */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* Internet Explorer/Edge */
     user-select: none; /* Non-prefixed version, currently
   }
  </style>
</head>
<body>
 <div class="container" style="margin-top: 100px">
    <form action="insert.php" method='post'>
      <label><p><h3>公告内容:</h3></p></label>
      <p><input type="text" class="form-control" name='content'></p>
      <input type="submit" class="btn btn-primary" value="添加">
      <input type="reset" class='btn btn-danger'>
    </form>   
  </div>
  
</body>
</html>