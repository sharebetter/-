<?php 
session_start();
$img=imagecreatetruecolor(150, 70);
$black=imagecolorallocate($img, 0, 0, 0);
$white=imagecolorallocate($img, 255, 255, 255);
$gray=imagecolorallocate($img,180,180,180);
$str='1234567890qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM';
$str=str_shuffle($str);
// $str=join(' ',array_slice($arr,0,4));
$str2=mb_substr($str,0,4);
$str2Array=join(' ',str_split($str2));
$_SESSION['code']=$str2Array;
imagefill($img, 0, 0, $black);
for($i=0;$i<35;$i++){
	imagearc($img, mt_rand(0,160), mt_rand(0,50), mt_rand(0,160), mt_rand(0,50), mt_rand(0,360), mt_rand(0,360), $gray);
}
imagettftext($img,25,0,18,45, $white,'ms.ttf', $str2Array);
header('content-type:image/png');
imagepng($img);
?>