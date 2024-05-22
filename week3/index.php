<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
        $hour = date('H');
        if ($hour < 12){
            echo 'Good Morning';
        }
        else{
            echo 'Good Aftermoon';
        }

        $day = date('D');
        echo '<br>'.$day.'<br>';


        $hour = rand(1,24);
        echo $hour.'<br>';
        if($hour <= 12){
            echo 'Good Morning';
        }
        if($hour > 12 && $hour <= 15){
            echo 'Good Afternoon';
        }
        if($hour > 15 && $hour <= 20){
            echo 'Good Evening';
        }
        if($hour > 20 && $hour <= 24){
            echo 'Good Night';
        }

        $num = rand(1,100);
        echo '<br>'.$num.'<br>';
        if($num % 3 == 0 && $num % 5 == 0){
            echo 'FizzBuzz';
        }
        elseif($num % 3 == 0){
            echo 'Fizz';
        }
        elseif($num % 5 == 0){
            echo 'Buzz';
        }
        else{
            echo $num;
        }

    ?>
    
</body>
</html>