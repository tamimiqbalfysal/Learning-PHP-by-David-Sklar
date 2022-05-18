<?php


//4. What does the following code print out? 

function restaurant_check($meal, $tax, $tip) {
 $tax_amount = $meal * ($tax / 100);
 $tip_amount = $meal * ($tip / 100);
 return $meal + $tax_amount + $tip_amount;
}
$cash_on_hand = 31;
$meal = 25;
$tax = 10;
$tip = 10;
while(($cost = restaurant_check($meal,$tax,$tip)) < $cash_on_hand) {
 $tip++;
 print "I can afford a tip of $tip% ($cost)\n";
}

 

/*
Output: 
I can afford a tip of 11% (30) 
I can afford a tip of 12% (30.25) 
I can afford a tip of 13% (30.5) 
I can afford a tip of 14% (30.75)
*/

?> 

