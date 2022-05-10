<?php
$colors= array('white','green','red');
$txt = "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$colors[0]." carpet, the ".$colors[1]." lawn, the ".$colors[2]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

$num1 = array(1, 2, 3, 4, 5);

function add_item($arr, $index, $val){
    $arr[] = $val;
    $x = $arr[count($arr)-1];

    for($i=(count($arr)-1); $i > $index; $i--){
        $arr[$i] = $arr[$i-1];
    }

    $arr[$index] = $x;

    return $arr;
}

    echo "<p>
        <h2>1.	Write a script to generate the following paragraph ?</h2>
        <p> 'white','green','red' => " . $txt . "</p>
    </p>";

    echo "<p>
        <h2>2.	Write a PHP script that will display the colors as unordered list ?</h2>
        <p> 
            <ul>";
            foreach ($colors as $cr) {
                 echo "<li>". $cr . "</li>";
            }
            echo "</ul>
        </p>
    </p>";

    echo "<p>
    <h2>3.	Create a PHP script to displays the capital and country name from the above array \$cities. Sort the list by the capital of the country ?</h2>
        <p> 
            <ul>";
            foreach ($cities as $k => $v) {
                 echo "<li>The capital of ". $v . " is ". $k ."</li>";
            }
            echo "</ul>
        </p>
    </p>";

    echo "<p>
        <h2>4.	Write a PHP script to display the first element of the above array ?</h2>
        <p> (4 =>'white', 6 =>'green', 11 =>'red') => " . $color["4"] . "</p>
    </p>";

    echo "<p>
        <h2>5.	Write a PHP script that inserts a specific new item in an array in any position ?</h2>
        <p> \$num1 => "; print_r(add_item($num1, 2, "$")); echo "</p>
    </p>";
?>