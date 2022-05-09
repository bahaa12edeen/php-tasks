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
        $weather = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];
        echo "<p>
            We've seen all kinds of weather this month. At the beginning of the month, we had snow".$weather[5]." and wind".$weather[6].". Then came sunshine".$weather[1]." with a few clouds".$weather[2]." and some rain".$weather[0].". At least we didn't get any hail".$weather[3]." or sleet".$weather[4].".
        </p>";
    ?>
</body>
</html>