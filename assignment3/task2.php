<?php
    function numseries(){
        $str1="";
        for($i=0; $i <= 10; $i++){
            if($i > 0)
            $str1 .= "-";
            $str1 .= $i;
        }
        return $str1;
    }

    function sum($num){
        $sum=0;
        for($i=0; $i <= $num; $i++){
            $sum += $i;
        }
        return $sum;
    }

    function squirchar(){
        $strin="";
        for($i=0; $i < 5; $i++){
            
            if($i==0)
            for($e=0; $e < 5; $e++)
            $strin.="A";

            if($i==1)
            for($e=0; $e < 5; $e++){
                if($e<3){
                    $strin.="A";
                }else{
                    $strin.="B";
                }

            }

            if($i==2)
            for($e=0; $e < 5; $e++){
                if($e<2){
                    $strin.="A";
                }else{
                    $strin.="C";
                }

            }
            // $strin="AACCC";

            if($i==3)
            for($e=0; $e < 5; $e++){
                if($e<1){
                    $strin.="A";
                }else{
                    $strin.="D";
                }

            }
            // $strin="ADDDD";

            if($i==4)
            for($e=0; $e < 5; $e++){
                if($e<0){
                    $strin.="A";
                }else{
                    $strin.="E";
                }

            }
            // $strin="EEEEE";
            
            $strin .= "<br>";
        }

        return $strin;
    }

    function squirnum(){
        $strin="";
        for($i=0; $i < 5; $i++){
            
            if($i==0)
            for($e=0; $e < 5; $e++)
            $strin.="1";

            if($i==1)
            for($e=0; $e < 5; $e++){
                if($e<3){
                    $strin.="1";
                }else{
                    $strin.="2";
                }

            }

            if($i==2)
            for($e=0; $e < 5; $e++){
                if($e<2){
                    $strin.="1";
                }else{
                    $strin.="3";
                }

            }
            // $strin="AACCC";

            if($i==3)
            for($e=0; $e < 5; $e++){
                if($e<1){
                    $strin.="1";
                }else{
                    $strin.="4";
                }

            }
            // $strin="ADDDD";

            if($i==4)
            for($e=0; $e < 5; $e++){
                if($e<0){
                    $strin.="1";
                }else{
                    $strin.="5";
                }

            }
            // $strin="EEEEE";
            
            $strin .= "<br>";
        }

        return $strin;
    }

    function squir(){
        $num="";
        for($i=0; $i < 5; $i++){
            for($e=0; $e < 5; $e++){

                if($i==$e){
                    $num .= $e+1;
                }else{
                    $num .= "0";
                }
            }
            $num .= "<br>";
        }
        
        return $num;
    }

    function factorial($num){
        $fac=1;
        for($i=1; $i < $num; $i++){
            $fac *= $i+1;
        }

        return $fac;
    }

    function char($str){
        $strlength = strlen($str);
        $num=0;
        for($i=0; $i < $strlength; $i++){
            if($str[$i] == "c" || $str[$i] == "C"){
                $num++;
            }
        }
        return $num;
    }

    function tabel(){
        $table = "<table style=' border-collapse: collapse;'>";
        for($i=0; $i < 6; $i++){
            $content = "";
            for($e=0; $e < 5; $e++){
                $content .= "<td style='border:1px solid; padding:5px;'>".($i+1)." * ".($e+1)." = ".($e+1)*($i+1)."</td>";
            }
            $table .=  "<tr>".$content."</tr>";
        }
        $table .= "</table>";

        return $table;
    }

    function fzz($num1, $num2, $num3){
        if(!($num1%3) && !($num1%5)){
            echo ("num1 (" . $num1 . ") is: fizz & buzz");
        }else if(($num1%3) && ($num1%5)){
            echo ("num1 (" . $num1 . ") is: Not divisible by 3 & 5");
        }else if(($num1%3) || ($num1%5)){
            if(!($num1%3)){
                echo ("num1 (" . $num1 . ") is: fizz but Not divisible by 5");
            }else{
                echo ("num1 (" . $num1 . ") is: buzz but Not divisible by 3");
            }
        }
        
        echo ("<br>");
        /* 22222222222222222222222222222222222222222222222 */
        echo ("- ");
        
        if(!($num2%3) && !($num2%5)){
            echo ("num2 (" . $num2 . ") is: fizz & buzz");
        }else if(($num2%3) && ($num2%5)){
            echo ("num2 (" . $num2 . ") is: Not divisible by 3 & 5");
        }else if(($num2%3) || ($num2%5)){
            if(!($num2%3)){
                echo ("num2 (" . $num2 . ") is: fizz but Not divisible by 5");
            }else{
                echo ("num2 (" . $num2 . ") is: buzz but Not divisible by 3");
            }
        }
        
        echo ("<br>");
        /* 33333333333333333333333333333333333333333333333 */
        echo ("- ");
        
        if(!($num3%3) && !($num3%5)){
            echo ("num3 (" . $num3 . ") is: fizz & buzz");
        }else if(($num3%3) && ($num3%5)){
            echo ("num3 (" . $num3 . ") is: Not divisible by 3 & 5");
        }else if(($num3%3) || ($num3%5)){
            if(!($num3%3)){
                echo ("num3 (" . $num3 . ") is: fizz but Not divisible by 5");
            }else{
                echo ("num3 (" . $num3 . ") is: buzz but Not divisible by 3");
            }
        }
    }

    echo "<p>
    <h2>1.	Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position ?</h2>
        <p>" . numseries() . "</p>
    </p>";

    echo "<p>
    <h2>2.	Create a script using a for loop to add all the integers between 0 and 30 and display the total ?</h2>
        <p>" . sum(30) . "</p>
    </p>";

    echo "<p>
    <h2>3.	Create a script to generate the following pattern, using the nested for loop ?</h2>
        <p>" . squirchar() . "</p>
    </p>";
    
    echo "<p>
    <h2>4.	Create a script to generate the following pattern, using the nested for loop ?</h2>
        <p>" . squirnum() . "</p>
    </p>";  

    echo "<p>
    <h2>5.	Create a script to generate the following pattern, using the nested for loop ?</h2>
        <p>" . squir() . "</p>
    </p>";  

    echo "<p>
    <h2>6.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number ?</h2>
        <p>" . 5 . " => " . factorial(5) . "</p>
    </p>"; 
    
    echo "<p>
    <h2>8.	Write a program which will count the \"c\" characters in the text \"Orange Coding Academy\" ?</h2>
        <p>" . char("Orange Coding Academy") . "</p>
    </p>"; 

    echo "<p>
    <h2>9.	Write a PHP script that creates the following table using for loops ?</h2>
        <p>" . tabel() . "</p>
    </p>"; 

    echo "<p>
    <h2>9.	Write a PHP script that creates the following table using for loops ?</h2>
        <p>";echo fzz(12, 4, 78) . "</p>
    </p>"; 
?>