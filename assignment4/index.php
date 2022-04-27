<?php

if (isset($_POST['submit'])) {
    $result1 = $_POST['numb1'];
    header('Location: '.$result1);
}

if (isset($_POST['submit1'])) {
    $result1 = $_POST['numb1'];
    $result2 = $_POST['numb2'];
    $operator = $_POST['operator'];
    
    switch ($operator) {
       
        case 'Add':
            $Result= $result1 + $result2;
            break;
        case 'Subtract':
            $Result= $result1 - $result2;
            break;
        case 'Multiply':
            $Result= $result1 * $result2;
            break;
        case 'Divide':
            $Result= $result1 / $result2;
            break;
       
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="numb1">

        <button type="submit" name="submit" value="submit">Search</button>
    </form>
    
    <form action="" method="" id="form">
        <div class="radio">
            <div class="frst">
                <label for="get">GET</label>
                <input type="radio" name="method" id="get">
            </div>
            <div class="scnd">
                <label for="post">POST</label>
                <input type="radio" name="method" id="post">
            </div>
        </div>

        <div class="input">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Enter Your Password">
        </div>

        <input type="submit" id="submit">
    </form>

    <form method="post">
            <input type="text" name="numb1">
            <input type="text" name="numb2">
            <select name="operator" id="">
             
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
         
            </select>
         


            <button type="submit" name="submit1" value="submit">Calculate</button>
         </form>

 <h1>Result: <?php if(isset($_POST['submit1'])) {echo  $Result;}?></h1>

    <form action="" method="post">
        <input type="text" name="todo_name" placeholder="Enter your to do ">
        <input type="submit" name="submit2">
    </form>
<?php 
if (isset($_POST['submit2'])){
    $label=$_POST["todo_name"];
    echo'<input type="checkbox" name="'.$label.'" id="'.$label.'">
         <label for="">'.$label.'</label>';
}


?>
<hr>
<form action="" method="post">
    <label for="">cookie name</label>
     <input type="text" name="name" required>
    <label for="">cookie value</label>
     <input type="text" name="value" required>

    <input type="submit" name="submit3">
</form>

<?php 

if (isset($_POST['submit3'])){
    $cname = $_POST['name'];
    $cvalue = $_POST['value'];
    
    setcookie($cname, $cvalue, time() + 7200,'/php-tasks/');
    
    echo "cookie is " . $cname ." value -> ". $cvalue. ", cookie expire 2 hour";
}

?>

<script>
     document.getElementById("get").onclick = function(){
        document.getElementById("form").setAttribute("method", "get");
     }

     document.getElementById("post").onclick = function(){
        document.getElementById("form").setAttribute("method", "post");
     }
</script>
</body>
</html>