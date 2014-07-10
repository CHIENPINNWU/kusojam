<?php

$f_san = trim($_POST["f_san"]);
$s_san = trim($_POST["s_san"]);
$t_san = trim($_POST["t_san"]);

//PHP's GD class functions can create a variety of output image
//types, this example creates a jpeg
//header("Content-Type: image/jpeg");
$im = imagecreatefromjpeg('kuso.jpg');
$color = imagecolorallocate($im, 255, 255, 255);

$f_san_start_pos = 310 - 15*mb_strlen($f_san,'utf-8');
$s_san_start_pos = 310 - 15*mb_strlen($s_san,'utf-8');
$t_san_start_pos = 310 - 15*mb_strlen($t_san,'utf-8');



imagettftext($im,22,0,$f_san_start_pos,425,$color,'wt005.ttf',$f_san);
imagettftext($im,22,0,$s_san_start_pos,900,$color,'wt005.ttf',$s_san);
imagettftext($im,22,0,$t_san_start_pos,1375,$color,'wt005.ttf',$t_san);



$filename = date('Ymdhis');

imagejpeg($im,"temp/${filename}.jpg", 75);
imageDestroy($im);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RESULT</title>
    </head>
    <body>
        <img src="temp/<?php echo ${filename} ?>.jpg" />
    </body>
</html>


