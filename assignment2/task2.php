<?php

$str1 = "i am trainee in orange coding acdemy";
$date = '085119';
$str2 = 'I am a full stack developer at orange coding academy';
$path = 'www.orange.com/index.php';
$url1 = 'info@orange.com';
$str3= 'That new trainee is so genius.';
$str4='dragonball';
$str5='dragonboll';
$str6='Twinkle, twinkle, little star.';

function specific_word($str2){
    $newString= strtolower($str2);
    if (strpos($str2, 'orange') !== false)
        return 'Word found!';
        else return 'Word not found';
}

function extract_name($path){
    return $file_name = substr(strrchr($path, '/'), 1);
}

function extract_username($url1){
    return $username= strstr($url1, '@', true);
}

function last_three($url1){
    return substr($url1, -3);
}

function randompass($chose){
    $sambol = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($sambol),0,$chose);
}

function first_char($str4, $str5){
    $position=strspn($str4 ^ $str5,"\0");
    printf( 'First difference between two strings at position %d: "%s" vs "%s"',$position, $str4[$position],$str5[$position]);
}

function strtoarr($str6){
    return $array=explode('<br>', $str6);
}

echo "<p>
          <h2>1.	Write a PHP script to: </h2>
          <ol>" . "<li>"."<b>To Uppercase: </b>".strtoupper($str1)."</li>
                   <li>"."<b>To Lowercase: </b>".strtolower($str1)."</li>
                   <li>"."<b>To Upeercase the first letter of the string: </b>".ucfirst($str1)."</li>
                   <li>"."<b>To Upeercase the first letter of each word: </b>".ucwords($str1)."</li>" . "</ol>
      </p>";

      echo "<p>
          <h2>2.	Write a PHP script splitting the following numeric string to be a date format ?</h2>
          <p>" . $date . " => " . substr(chunk_split($date,2,':'),0,-1) . "</p>
      </p>";
      
      echo "<p>
          <h2>3.	Write a PHP script to check whether the sentence contains a specific word ?</h2>
          <p>" . $str2 . " => " . specific_word($str2) . "</p>
      </p>";

      echo "<p>
          <h2>4.	Write a PHP script to extract the file name from the URL ?</h2>
          <p>" . $path . " => " . extract_name($path) . "</p>
      </p>";

      echo "<p>
          <h2>5.	Write a PHP script to extract the username from the following email address ?</h2>
          <p>" . $url1 . " => " . extract_username($url1) . "</p>
      </p>";

      echo "<p>
          <h2>6.	Write a PHP script to get the last three characters from the string ?</h2>
          <p>" . $url1 . " => " . last_three($url1) . "</p>
      </p>";

      echo "<p>
          <h2>7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string ?</h2>
          <p>" . "Your password cosist of 10 character which is: " . " => " . randompass(10) . "</p>
      </p>";

      echo "<p>
          <h2>8.	Write a PHP script to replace the first word of the sentence with another word ?</h2>
          <p>" . 'The string before replacing is: ' . " => " . $str3 . "</p>
          <p>" . 'The string after replacing is: ' . " => " . preg_replace('/That/','The', $str3,1) . "</p>
      </p>";

      echo "<p>
          <h2>9.	Write a PHP script to find the first character that is different between two strings ?</h2>
          <p>" . $str4, $str5 . " => " . first_char($str4, $str5) . "</p>
      </p>";

      echo "<p>
          <h2>10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array ?</h2>
          <p>"; echo $str6; echo " => "; echo var_dump(strtoarr($str6)) . "</p>
      </p>";
/** */

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";

      echo "<p>
          <h2>1. Write a PHP script to check if the inserted number is a prime number ?</h2>
          <p>" . $num1 . " => " . ifprime($num1) . "</p>
      </p>";
      