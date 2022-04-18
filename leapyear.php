<?php
$year = 2022;
if (($year % 400 == 0) || ($year % 100 != 0 && $year % 4 == 0)) 
     print($year." is a leap year");  
else print($year." is a common year");
?>