<?php
if (($_GET['length-input'] > 0) && (($_GET['length-input']) != null)) {
    $lenghtValue = $_GET['length-input'];
    $newPassword = generatePassword($lenghtValue);
}


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

    session_start();
    $_SESSION['generatedPassword'] = implode($newPassword);
};


$newPassword = generatePassword($lenghtValue);


?>


?>