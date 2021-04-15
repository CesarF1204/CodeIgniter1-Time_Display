<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p,h1 {
            display: block;
            margin: auto;
            margin-top: 20px;
            width: 250px;
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
        h1 {
            padding: 0 100px;
        }
    </style>
</head>
<body>
    <p>The current time and date:</p>
    <h1><?php echo $date_time['current_date']; ?><br>
        <?php echo $date_time['current_time']; ?></h1>
</body>
</html>