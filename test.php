<?php
include_once('Shapes\ClassPyramid.php');

$pyrammid = new ClassPyramid('triangle');

$pyrammid->setBaseLength(5);
$pyrammid->setBaseWidth(8);
$pyrammid->setHeight(23);

echo $pyrammid->getVolume();