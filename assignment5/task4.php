<?php
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    if(isset($_POST["day"])){
        $day = $_POST["day"];


        switch($day){
            case 'Saturday':
                echo "Laugh on Saturday, joy tomorrow ";
            break;

            case 'Monday':
                echo "Laugh on Monday, laugh for danger ";
            break;

            case 'Tuesday':
                echo "Laugh on Tuesday, kiss a stranger ";
            break;

            case 'Wednesday':
                echo "Laugh on Wednesday, laugh for a letter ";
            break;

            case 'Thursday':
                echo "Laugh on Thursday, something better ";
            break;

            case 'Friday':
                echo "Laugh on Friday, laugh for sorrow ";
            break;

            default:
                echo "your data enterd not valid: ".$day;
            break;
        }
        $content = '
        <form action="" method="post">
            <input type="submit" name="submit1" value="back">
        </form>
        ';
    }else{
        $content = '
        <form action="" method="post">
            <label for="day">enter a day of the week: </label>
            <input type="text" name="day" id="day">
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>';
    }

    if(isset($_POST["submit1"])){
        $content = '
        <form action="" method="post">
            <label for="day">enter a day of the week: </label>
            <input type="text" name="day" id="day">
            <br><br>
            <input type="submit" name="submit" value="submit">
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