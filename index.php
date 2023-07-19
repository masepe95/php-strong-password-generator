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

            $takeSpecialchar = rand(0, 17);
            array_push($newPassword, $specialArray[$takeSpecialchar]);
        } elseif ($charType === 2) {

            $takeChar = rand(0, 23);
            array_push($newPassword, $charArray[$takeChar]);
        } elseif ($charType === 3) {

            $takeNumber = rand(0, 9);
            array_push($newPassword, $numArray[$takeNumber]);
        }
    }

    return implode($newPassword);
};


$newPassword = generatePassword($lenghtValue);

var_dump($newPassword);

?>


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <h1>
        titolo
    </h1>
</body>

</html>