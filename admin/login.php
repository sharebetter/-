<!doctype html public "-//w3c//dtd html 4.01 transitional//en" "http://www.w3c.org/tr/1999/rec-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>用户登录</title>
    <link href="public/css/default.css" type=text/css rel=stylesheet>
    <link href="public/css/xtree.css" type=text/css rel=stylesheet>
    <link href="public/css/user_login.css" type=text/css rel=stylesheet>
    <meta http-equiv=content-type content="text/html; charset=gb2312">
    <meta content="mshtml 6.00.6000.16674" name=generator>
    <style>
      input{
        outline:none;
      }
    </style>
</head>
<body id=userlogin_body>
<form action='check.php' method='post'>
  <div></div>
  <div id=user_login>
<dl>
  <dd id=user_top>
  <ul>
    <li class=user_top_l></li>
    <li class=user_top_c></li>
    <li class=user_top_r></li>
  </ul>
  <dd id=user_main>
  <ul>
    <li class=user_main_l></li>
    <li class=user_main_c>
      <div class=user_main_box>
        <ul>
          <li class=user_main_text>用户名： </li>
          <li class=user_main_input><input class=txtusernamecssclass id=txtusername 
          maxlength=20 name='user'> </li>
        </ul>
        <ul style='padding-top:20px'>
          <li class=user_main_text>密 码： </li>
          <li class=user_main_input><input class=txtpasswordcssclass id=txtpassword 
          type=password name='psw'> </li>
        </ul>
      </div>
  </li>
    <li class=user_main_r>
      <input class=ibtnentercssclass id=ibtnenter 
    style="border-top-width: 0px; border-left-width: 0px; border-bottom-width: 0px; border-right-width: 0px" 
    onclick='javascript:webform_dopostbackwithoptions(new webform_postbackoptions("ibtnenter", "", true, "", "", false, false))' 
    type=image src="public/img/user_botton.gif" name=ibtnenter> </li>
  </ul>
  <dd id=user_bottom>
  <ul>
    <li class=user_bottom_l></li>
    <li class=user_bottom_c><span style="margin-top: 40px"></span> </li>
    <li class=user_bottom_r></li></ul></dd></dl></div><span id=valrusername 
style="display: none; color: red"></span><span id=valrpassword 
style="display: none; color: red"></span><span id=valrvalidatecode 
style="display: none; color: red"></span>
<div id=validationsummary1 style="display: none; color: red"></div>

<div></div>
</form>
</body></html>
