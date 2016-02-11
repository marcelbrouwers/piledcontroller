<?php
// CONFIG
$pinRed		= 17;
$pinGreen	= 27;
$pinBlue	= 22;

// CODE
if(is_numeric($_GET['red'])){
	exec("echo \"" . $pinRed . "=" . $_GET['red']/255 . "\" > /dev/pi-blaster");
	}
if(is_numeric($_GET['green'])){
	exec("echo \"" . $pinGreen . "=" . $_GET['green']/255 . "\" > /dev/pi-blaster");
	}
if(is_numeric($_GET['blue'])){
	exec("echo \"" . $pinBlue . "=" . $_GET['blue']/255 . "\" > /dev/pi-blaster");
	}
?>
