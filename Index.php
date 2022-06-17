<?php

include "Movie.php";

$armyofdarkness = new Movie(
    "Army of Darkness",
    "Sam Raimi",
    "In this sequel to the Evil Dead films, a discount-store employee (Name's Ash. Housewares.) is time-warped to a medieval castle beset by monstrous forces. Initially mistaken for an enemy, he is soon revealed as the prophecised savior who can quest for the Necronomicon, a book which can dispel the evil. Unfortunately, he screws up the magic words while collecting the tome, and releases an army of skeletons, led by his own Deadite counterpart. What follows is a thrilling, yet tongue-in-cheek battle between Ash's 20th Century tactics and the minions of darkness.",
    "https://upload.wikimedia.org/wikipedia/en/4/46/Army_of_Darkness_poster.jpg",
    "Bruce Campbell",
    "October 9 1992",
    "United States",
);
$armyofdarkness->setLength(81);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP OOP</title>
</head>

<body>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-dark rounded-3 text-center">
                <img src="<?php echo $armyofdarkness->poster; ?>" alt="Movie Poster" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h1><?php echo $armyofdarkness->title; ?></h1>
                <i>Directed and written by</i>
                <h4><?php echo $armyofdarkness->director; ?></h4>
                <blockquote class="blockquote">
                    <p>"<?php echo $armyofdarkness->plot; ?>"</p>
                </blockquote>
                <i>Starring:</i>
                <h4><?php echo $armyofdarkness->actor; ?></h4>
                <div class="text-wrap">
                    <i>Running time:</i> <b><?php echo $armyofdarkness->getLengthMinutes(); ?> minutes</b>
                    <i>Release date:</i> <b><?php echo $armyofdarkness->date; ?></b>
                    <i>Country:</i> <b><?php echo $armyofdarkness->country; ?></b>
                </div>
            </div>
        </div>
    </div>
</body>

</html>