<?php

$lengthValue = array_key_exists('length-input', $_GET) ? $_GET['length-input'] : '';
$charCheck = array_key_exists('char-option', $_GET) ? $_GET['char-option'] : '';
$numCheck = array_key_exists('num-option', $_GET) ? $_GET['num-option'] : '';
$specialcharCheck = array_key_exists('specialchar-option', $_GET) ? $_GET['specialchar-option'] : '';

$newPassword = generatePassword($lengthValue, $charCheck, $specialcharCheck, $numCheck);

function generatePassword($length, $charCheck, $specialcharCheck, $numCheck)
{
    $specialArray = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '!', '=', '?', ':', '.', ';'];
    $charArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'k', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z'];
    $numArray = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
    $newPassword = [];

    for ($i = 0; $i < $length; $i++) {


        if (($specialcharCheck != null) && ($charCheck != null) && ($numCheck != null)) {
            $charType = rand(1, 3);
        } elseif (($specialcharCheck != null) && ($charCheck != null) && ($numCheck == null)) {
            $charType = rand(1, 2);
        } elseif (($specialcharCheck == null) && ($charCheck != null) && ($numCheck != null)) {
            $charType = rand(2, 3);
        } elseif (($specialcharCheck != null) && ($charCheck == null) && ($numCheck != null)) {
            $charType = rand(2, 3);
            if ($charType === 2) {
                $charType = 1;
            }
        } elseif (($specialcharCheck != null) && ($charCheck == null) && ($numCheck == null)) {
            $charType = 1;
        } elseif (($specialcharCheck == null) && ($charCheck != null) && ($numCheck == null)) {
            $charType = 2;
        } elseif (($specialcharCheck == null) && ($charCheck == null) && ($numCheck != null)) {
            $charType = 3;
        }

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
    if (($specialcharCheck == '') && ($charCheck == '') && ($numCheck == '')) {
        $_SESSION['generatedPassword'] = 'Così come non si può vivere nutrendosi di sola luce solare, così non si può generare una password senza nessun elemento!';
    } else {
        $_SESSION['generatedPassword'] = implode($newPassword);
    }

    // var_dump($_GET['char-option']);
    // var_dump($_GET['specialchar-option']);
    // var_dump($_GET['num-option']);
};
