
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
  <div class="row">
    <div class="col-sm-10 col-md-11 col-lg-11 col-sm-offset-1 main" id="main">
      <div class="row">
        <form action="insert.php" method="post" class="add-article-form">
          <div class="col-md-9">
            <h1 class="page-header">今日推荐</h1>
            <div class="form-group">
              <label for="article-title" class="sr-only">标题</label>
              <input type="text" id="article-title" name="title" class="form-control" placeholder="在此处输入标题"  required autofocus autocomplete="off">
            </div>           
            <div class="form-group">
              <label for="article-content" class="sr-only">内容</label>
              <script id="article-content" name="content" type="text/plain"></script>
            </div>
             <div class="add-article-box-footer">
                <button class="btn btn-primary" type="submit" name="submit">发布</button>
             </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="../../public/bs/js/bootstrap.min.js"></script> 
<script src="../../public/bs/js/admin-scripts.js"></script>
<script src="../../public/lib/ueditor/ueditor.config.js"></script> 
<script src="../../public/lib/ueditor/ueditor.all.min.js"> </script> 
<script src="../../public/lib/ueditor/lang/zh-cn/zh-cn.js"></script>  
<script id="uploadEditor" type="text/plain" style="display:none;"></script>

<script type="text/javascript">
var editor = UE.getEditor('article-content');
window.onresize=function(){
    window.location.reload();
}
var _uploadEditor;
$(function () {
    //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
    _uploadEditor = UE.getEditor('uploadEditor');
    _uploadEditor.ready(function () {
        //设置编辑器不可用
        //_uploadEditor.setDisabled();
        //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
        _uploadEditor.hide();
        //侦听图片上传
        _uploadEditor.addListener('beforeInsertImage', function (t, arg) {
            //将地址赋值给相应的input,只去第一张图片的路径
            $("#pictureUpload").attr("value", arg[0].src);
            //图片预览
            //$("#imgPreview").attr("src", arg[0].src);
        })
        //侦听文件上传，取上传文件列表中第一个上传的文件的路径
        _uploadEditor.addListener('afterUpfile', function (t, arg) {
            $("#fileUpload").attr("value", _uploadEditor.options.filePath + arg[0].url);
        })
    });
});
//弹出图片上传的对话框
$('#upImage').click(function () {
    var myImage = _uploadEditor.getDialog("insertimage");
    myImage.open();
});
//弹出文件上传的对话框
function upFiles() {
    var myFiles = _uploadEditor.getDialog("attachment");
    myFiles.open();
}
</script>
</body>
</html>