<?php
    if(isset($_POST["city"])){
        $city = $_POST["city"];
        echo "i hope one day you will visit ".$city;
        $content = '';
    }else{
        $content = '
        <form action="" method="post">
            <label for="city">enter tour favorite city: </label>
            <input type="text" name="city" id="city">
            <br><br>
            <input type="submit" value="submit">
        </form>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
         echo $content;
     ?>
</body>
</html>