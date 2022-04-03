<?php
    require_once "includes/dbconfig_class.php";
    require_once "includes/dbconnect_class.php";
    require_once "includes/generator_class.php";
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
    <?php
        $prizes = new prizegenerator;
        $prizes->getPrize();
    ?>
</body>
</html>