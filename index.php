<?php
    date_default_timezone_set('Europe/Amsterdam');
    $time = date("H:i"); 
    $hour = date("H");
    $greetString;
    $imageURL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AO-B3-W1-L4-if_else_elseif</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if($hour >= 18){
            $greetString = "Goede avond";
            $imageURL = "evening.png";
        } elseif($hour >= 12){
            $greetString = "Goede middag";
            $imageURL = "afternoon.png";
        } elseif($hour >= 6){
            $greetString = "Goede morgen";
            $imageURL = "morning.png";
        } else {
            $greetString = "Goede nacht";
            $imageURL = "night.png";
        }
    ?>
    <style>
        body{
            background-image: url("images/<?php echo $imageURL; ?>");
        }
    </style>
    <div id="container">
        <h1><?php echo $greetString; ?></h1>
        <br>
        <h1>Het is nu <?php echo $time; ?></h1>
    </div>
</body>
</html>