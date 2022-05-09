<?php

$year = 2013;
$hot = 25;
$x=12; $y=12;

function check_leap($year){
    if ($year % 400 == 0)
       print("It is a leap year");
    else if ($year % 100 == 0)
       print("It is not a leap year");
    else if ($year % 4 == 0)
       print("It is a leap year");
    else
       print("It is not a leap year");
 }

 function check_season($hot){
     if($hot <= 20){
         return "we are in winter";
     }else{
        return "we are in summer";
     }
 }

 function sum_cal($x, $y){
     if($x == $y){
         return ($x + $y)*3;
     }else{
        return ($x + $y);
     }
 }

 function sum30(){
     
 }

 function substr1($a, $b){
    if(($a+$b) == 30){
       return ($a+$b);
    }else{
       return "false";
    }
 }



echo "<p>
        <h2>1.	Write a PHP script to see if the specified year is a leap year or not ?</h2>
        <p>" . $year . " => "; echo check_leap($year) . "</p>
      </p>";

      echo "<p>
              <h2>2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer ?</h2>
              <p>" . $hot . " => " . check_season($hot) . "</p>
      </p>";

      echo "<p>
              <h2>3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum ?</h2>
              <p>" . $x." + ".$y . " => " . sum_cal($x, $y) . "</p>";
              $x=4; $y=13;
              echo "<p>" . $x." + ".$y . " => " . sum_cal($x, $y) . "</p>
      </p>";
$a=15;
$b = 16;
      echo "<p>
            <h2>4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false ?</h2>
            <p>" . $a." / ". $b . " => " . substr1($a, $b) . "</p>
      </p>";

?>