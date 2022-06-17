<?php

include "Movie.php";

$armyofdarkness = new Movie(
    "Army of Darkness",
    "Sam Raimi",
    "In this sequel to the Evil Dead films, a discount-store employee (Name's Ash. Housewares.) is time-warped to a medieval castle beset by monstrous forces. Initially mistaken for an enemy, he is soon revealed as the prophecised savior who can quest for the Necronomicon, a book which can dispel the evil. Unfortunately, he screws up the magic words while collecting the tome, and releases an army of skeletons, led by his own Deadite counterpart. What follows is a thrilling, yet tongue-in-cheek battle between Ash's 20th Century tactics and the minions of darkness.",
    "https://upload.wikimedia.org/wikipedia/en/4/46/Army_of_Darkness_poster.jpg"
);
$armyofdarkness->setLength(8640);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <img src="
        <?php echo $armyofdarkness->poster; ?>" alt="Movie Poster">
    <h1><?php echo $armyofdarkness->title; ?></h1>
    <i>Directed and written by</i>
    <h2><?php echo $armyofdarkness->director; ?></h2>
    <i>Running time:</i> <b><?php echo $armyofdarkness->getLengthMinutes(); ?></b>
    <p>"<?php echo $armyofdarkness->plot; ?>"</p>
</body>

</html>