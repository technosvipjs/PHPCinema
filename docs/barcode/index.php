<?php
require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');
require_once('class/BCGcode128.barcode.php');


//colors for back and front
$colorFront = new BCGColor(0, 0, 0);
$colorBack = new BCGColor(255, 255, 255);

//font for the text under barcode
$font = new BCGFontFile('font/Arial.ttf', 12);

//set barcode value
$value = 'movie15234';

//create a new barcode and set parameters
$code = new BCGcode128();
$code->setScale(2); 
$code->setThickness(40); 
$code->setForegroundColor($colorFont); 
$code->setBackgroundColor($colorBack);
$code->setFont($font);
$code->parse($value);

//set the header to show image
header('Content-Type: image/png');

//draw the image
$drawing = new BCGDrawing('barcode_gen/'.$value.'.png', $colorBack);
$drawing->setBarcode($code);
$drawing->draw();


//finish the code
$image = $drawing->finish(BCGDrawing::IMG_FORMAT_PNG);


?>
