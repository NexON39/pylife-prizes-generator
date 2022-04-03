<?php
    require_once "includes/dbconfig_class.php";
    require_once "includes/dbconnect_class.php";
    require_once "includes/generator_class.php";
    $prizes = new prizegenerator;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="main flex">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="code_title"><p>Twój kod uwierzytelniający to:</p></div>
            <div class="code"><p><?php $prizes->getPrize(); ?></p></div>
        </div>
    </div>
</body>
</html>