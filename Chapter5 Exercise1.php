
<?php

/* 1. Write a function to return an HTML tag. 
The function should accept a mandatory argument of the image URL and optional arguments for alt text, height, and width.
*/ 

 
$url = "pexels.com";
 
function img($url, $alt="not found", $width="400", $height="500"){
    echo "<html><head><title>Welcome to my site</title></head>";
    echo "img url: " . $url . " alt: " . $alt . " width: " . $width . " height " . $height . "<br>";  
}
 
echo img($url);
 
 
?>
 




