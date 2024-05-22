<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <?php echo 'Hello'; ?>
    <?php echo '<h1>Welcome to HTTP 5225</h1>' ?>
    <?php echo '<p>We will learn PHP in this class</p>' ?>
    
    
    <p>Things we will learn:</p>
    <?php 

    echo '<ul>
            <li>Php</li>
            <li>mySQL</li>
            <li>Laravel</li>
        </ul>';
    ?>
    <?php echo '<img src="https://placehold.co/600x400" alt="Placeholder image">';
    ?>
    <img src="<?php echo 'https://placehold.co/600x400'; ?>" alt="Placeholder image">

    <?php
        $fname = "Navjot";
        $lname = "Gill";
        $name['fname'] = 'Navjot';
        $name2 = array('Navjot', 'Gill');

    ?>

    <?php
        echo '</br>';
        echo 'Hello ' . $fname . ' ' . $lname;
        echo '</br>';
        echo 'Hello ' . $name['fname'] . ' ' . $lname;
        echo '</br>';
        echo 'Hello ' . $name2[0] . ' ' . $name2[1];
    ?>


</body>
</html>