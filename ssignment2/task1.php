<?php

  $num1=5;
  $str1="remove";
  $x=5;
  $y=1;
  $arm = "153";
  $str2 = "Eva";

//   echo $x[0];

function ifprime($num1){
    if (($num1 % 2)) {
        return "number is prime";
    }else{
        return "number is not prime";
    }
}

function reverse($str1){
    $rstr="";
    for($i = (strlen($str1)-1); $i >= 0; $i--){
        $rstr .= $str1[$i];
    }

    return $rstr;
}
/*********************************************************************** */
function lwrcase($str1){
    if (ctype_lower($str1)) {
        return " $str1: all lowercase char.\n";
    } else {
        return " $str1: not all lowercase char.\n";
    }
}


function swap($x, $y){
    $z = $x;
    $x = $y;
    $y = $z; 

    return "x: ".$x . " / ".  "y: ".$y;
}

function ifArmstrong($arm){
    $b=0;
    $sum = 0;
    for($i = (strlen($arm)-1); $i >= 0; $i--){
        $a = intval($arm[$i]);

        $b = $a*$a*$a;
        $sum += $b;
        // echo $sum . " / " . $b . " | ";
    }

    if($sum == $arm){
        return " is Armstrong Number ";
    }else{
        return " is NOT Armstrong Number ";
    }
}

function ifPalindrome($str2){
    $str = reverse($str2);
    $x=0;
    for($i = (strlen($str2)-1); $i >= 0; $i--){
        if($str2[$i] == $str[$i]){$x=1;}else{$x=0;}
    }

    if($x){
        return "Yes it is a palindrome ";
    }else{
        return "No it is NOT a palindrome ";
    }
}

// echo "sum: ".ifArmstrong($arm);


echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      
      echo "<p>
      <h2>2. Write a PHP script to reverse a string ?</h2>
      <p>" . $str1 . " => " . reverse($str1) . "</p>
  </p>";
  
  echo "<p>
  <h2>3. Write a PHP script to check if the all string characters are lower cases ?</h2>
  <p>" . $str1 . " => " . lwrcase($str1) . "</p>
</p>";

echo "<p>
<h2>4.	Write a PHP function to swap to variables ?</h2>
<p>" . "x: ".$x . " / ".  "y: ".$y . " => " . swap($x, $y) . "</p>
</p>";


echo "<p>
        <h2>5.	Write a PHP function to check if a number is an Armstrong number or not ?</h2>
        <p>" . $arm . " => " . ifArmstrong($arm) . "</p>
      </p>";


echo "<p>
<h2>6.	Write a PHP function that checks whether a passed string is a palindrome or not ?</h2>
<p>" . $str2 . " => " . ifPalindrome($str2) . "</p>
</p>";

  ?>