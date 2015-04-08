<?php

// The text to draw
$text = $_GET['message'];

// font size
$px = 12;

// Set the font path enviroment variable for GD
putenv('GDFONTPATH=' . realpath('/usr/share/fonts/msttcorefonts/'));
// The font
$font = 'courbd.ttf';

// the angle
$angle = 90;

$bbox = imagettfbbox($px, $angle, $font, $text);
$iw = abs($bbox[6]-$bbox[0]);
$ih = abs($bbox[3]-$bbox[1]);
$x = $iw;
$y = $ih;


/*
echo "<html>";
echo "<body>";
echo "w=$iw<br>";
echo "h=$ih<br>";
echo "x=$x<br>";
echo "y=$y<br>";
echo "</body>";
echo "</html>";
*/

$im = imagecreate(4+$iw,2+$ih);
$white = ImageColorAllocate($im, 255, 255, 255);
$black = ImageColorAllocate($im, 0,0,0);
imagefill($im, 0, 0,$white);

imagettftext($im, $px, $angle, 3+$x, 1+$y, $black, $font, $text);

header("content-type: image/png");
imagepng($im);
imagedestroy($im);

?>
