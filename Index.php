<?php

include "Movie.php";

$armyofdarkness = new Movie("Army of Darkness", "Sam Raimi", "A sardonic hardware store clerk is accidentally transported to 1300 A.D., where he must retrieve the Necronomicon and battle an army of the dead so he can return home.");
$armyofdarkness->setLength(8640);
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
    <h1><?php echo $armyofdarkness->title; ?></h1>
    <h2><?php echo $armyofdarkness->director; ?></h2>
    <b><?php echo $armyofdarkness->getLengthMinutes(); ?></b>
    <p><?php echo $armyofdarkness->plot; ?></p>
</body>

</html>