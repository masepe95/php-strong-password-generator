<?php
$lenghtValue = $_GET['lenght-input'];
var_dump($lenghtValue);


function generatePassword($lenght)
{
    $specialArray = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '!', '=', '?', ':', '.', ';'];
    $charArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'k', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z'];
    $numArray = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
    $newPassword = [];

    for ($i = 0; $i < $lenght; $i++) {

        $charType = rand(1, 3);

        if ($charType === 1) {

            $takeSpecialchar = rand(0, (count($specialArray) - 1));
            array_push($newPassword, $specialArray[$takeSpecialchar]);
        } elseif ($charType === 2) {

            $takeChar = rand(0, (count($charArray) - 1));
            array_push($newPassword, $charArray[$takeChar]);
        } elseif ($charType === 3) {

            $takeNumber = rand(0, (count($numArray) - 1));
            array_push($newPassword, $numArray[$takeNumber]);
        }
    }

    return implode($newPassword);
};


$newPassword = generatePassword($lenghtValue);


?>


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-secondary text-light">
    <h1 class="text-center p-5 bg-dark">
        Very Strong Password Generator!
    </h1>
    <div class="mx-auto mt-4 p-4 w-50 bg-primary text-center">
        <form method="get">
            <label for="length-input">
                Lunghezza Password:
            </label>
            <input type="number" name="lenght-input" id="lenght-input">
            <button type="submit">
                Invia
            </button>
        </form>
    </div>
    <?php if ((($_GET['lenght-input']) > 0) && (($_GET['lenght-input']) != null)) { ?>
        <div class="bg-info w-50 mx-auto mt-5 p-5">
            <h2>
                La tua password generata è:
            </h2>
            <p class="fs-2 text-success">
                <?php
                echo $newPassword;
                ?>
            </p>
        </div>
    <?php } else { ?>
        <div class="bg-warning w-50 mx-auto mt-5 p-5">
            <p>
                I parametri inseriti non sono validi, prego rincontrollare.
            </p>
        </div>
    <?php } ?>

</body>

</html>