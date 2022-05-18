



<?php

/* 5. Web colors such as #ffffff and #cc3399 are made by concatenating the hexa‐ decimal color values for red, green, and blue. 
Write a function that accepts deci‐ mal red, green, and blue arguments and returns a string containing the appropriate color for use in a web page. For example, if the arguments are 255, 0, and 255, then the returned string should be #ff00ff.
 You may find it helpful to use the built-in function dechex(), which is documented at http://www.php.net/ dechex.
*/ 
 
$first_value= 255;
$second_value=0;
$third_value=255;
 
echo "the hex value is  #" . dechex($first_value). dechex($second_value), dechex($third_value);
 
?>
