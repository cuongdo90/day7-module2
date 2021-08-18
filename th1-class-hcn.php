<?php  
include_once "Rectangle.php";

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width;
echo "<br/>";
echo $rectangle->height;

$rectangle->height = 30;
$rectangle->width = 20;

echo "<br/>";
echo $rectangle->height;
echo "<br/>";
echo $rectangle->width;
echo "<br/>";
echo $rectangle->getPerimeter();
echo "<br/>";
echo $rectangle->getArea();
echo "<br/>";
echo ("Your Rectangle" . $rectangle->display());
?>