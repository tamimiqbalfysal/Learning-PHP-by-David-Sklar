


 
<?php
 
 //2. Write a PHP program that computes the total cost of this restaurant meal: 
 //two hamburgers at $4.95 each, one chocolate milkshake at $1.95, and one cola at 85 cents. 
 //The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.

$hamburgers = 4.95;
$milkshake = 1.95;
$cola = .85;
 
$total_hamburger= $hamburgers*2;
 
$total_amount = $total_hamburger+$milkshake+$cola;
$after_saletax = $total_amount*.075;
$after_pretax = $after_saletax*.16;
 
echo "total cost is ". $after_pretax;
 
?>
