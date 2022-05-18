

 
<?php
 
 //5. Write a PHP program that uses the increment operator (++) and the combined multiplication operator (*=) to print out the numbers from 1 to 5 and powers of 2 from 2 (21 ) to 32 (25 )



$first_number = 5;
$first_number++;
 
 
 
echo ($first_number);
 
for ($first_number = 1; $first_number<=5; $first_number++){
    echo " The number is: $first_number <br>";
}
 
 
for ($power_number=2; $power_number<=32; $power_number++){
    $after_power= pow(2,$power_number);
    echo "The square is the number $power_number is: " . $after_power . "<br>";
}
 
