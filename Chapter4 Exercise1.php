
 
<?php

/* *1. According to the US Census Bureau, the 10 largest American cities (by popula‐ tion) in 2010 were as follows: 
• New York, NY (8,175,133 people) 
• Los Angeles, CA (3,792,621) 
• Chicago, IL (2,695,598) 
• Houston, TX (2,100,263) 
• Philadelphia, PA (1,526,006) 
• Phoenix, AZ (1,445,632) 
• San Antonio, TX (1,327,407) 
• San Diego, CA (1,307,402) 
• Dallas, TX (1,197,816) 
• San Jose, CA (945,942)
 Define an array (or arrays) that holds this information about locations and popu‐ lations. Print a table of locations and population information that includes the total population in all 10 cities.

*/ 

 
$citys = ["New York","Los Angeles","Chicago","Houston","Philadelphhia","San Antonio","San Diego","Dallas","San Jose" ];
$populations = ["8175133","3792621","2695598","2695598","1526006","1445632","1327407","1307402","1197816","945942"];
$total_populations=0;
 
 
for($i=0; $i<sizeof($citys); $i++){
    echo $citys[$i] . "have the population of " . $populations[$i] . "<br>";
    $total_populations = $populations[$i]+$total_populations;
}
 
echo "Total population = ". $total_populations;
 
?>
