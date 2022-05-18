
<?php
 
// 3. Use while() to print a table of Fahrenheit and Celsius temperature equivalents from –50 degrees F to 50 degrees F in 5-degree increments. On the Fahrenheit temperature scale, water freezes at 32 degrees and boils at 212 degrees. On the Celsius scale, water freezes at 0 degrees and boils at 100 degrees. So, to convert from Fahrenheit to Celsius, you subtract 32 from the temperature, multiply by 5, and divide by 9. To convert from Celsius to Fahrenheit, you multiply by 9, divide by 5, and then add 32. 



$initial_tem_f= 50;
 
 
 while( $initial_tem_f = 32);{
    echo "it's the freezing temperature";  
 }
 
 while( $initial_tem_f = 212);{
    echo "it's the boiling temperature";  
 }
 
 $initial_tem_c = (($initial_tem_f-32)*5)/9;
 
 while ($initial_tem_c = 0){
    echo "it's the freezing temperature";
 }
 
 while($initial_tem_c = 100){
    echo "it's the boiling temperature";
 }
 
 
echo "it;s neither a boiling temperature nor a freezing temperature";
 
 
?>
