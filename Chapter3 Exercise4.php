


 
<?php
 
// 4. Modify your answer to Exercise 3 to use for() instead of while().

//$initial_tem_f= -50;
 
 
 for ($initial_tem_f=-50; $initial_tem_f<=50; $initial_tem_f++){
 
    $initial_tem_c=(($initial_tem_f-32)*5)/9;
 
     if($initial_tem_c==0){
         
         echo "This is a frozeeing temperature and that is : " . $initial_tem_c . " degree celcius <br>";
     }
 
     if($initial_tem_c==100){
         echo "This is a boiling temperature and that is : " . $initial_tem_c . " degree celcius <br>";        
         }
    else{
        echo "Temperature is :" . $initial_tem_c . " degree celcius <br>";
    }
}
 
 
?>
 
