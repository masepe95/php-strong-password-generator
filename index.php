<?php
include_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Password Generator</title>
</head>

<body class="bg-secondary text-light">
    <h1 class="text-center p-5 bg-dark">
        Very Strong Password Generator!
    </h1>
    <div class="mx-auto mt-4 p-4 w-50 bg-primary text-center">
        <form method="get">
            <div class="w-50 mx-auto ">
                <div>
                    <label for="length-input">
                        Lunghezza Password:
                    </label>
                    <input type="number" name="length-input" id="length-input">
                </div>
                <div class="w-50 text-end">
                    <div>
                        <label for="char-option">
                            Lettere:
                        </label>
                        <input type="checkbox" name="char-option" id="char-option">
                    </div>

                    <div>
                        <label for="specialchar-option">
                            Caratteri speciali:
                        </label>
                        <input type="checkbox" name="specialchar-option" id="specialchar-option">
                    </div>

                    <div>
                        <label for="num-option">
                            Numeri:
                        </label>
                        <input type="checkbox" name="num-option" id="num-option">
                    </div>
                </div>
                <input class="mt-4 btn btn-light" type="submit" value="Send">
            </div>
        </form>
    </div>
    <?php
    $lengthInput = array_key_exists('length-input', $_GET) ? $_GET['length-input'] : '';
    if ($lengthInput === '') {
    ?>
        <div class="bg-info w-50 mx-auto mt-5 p-5">
            <p>
                Inserisci lunghezza e tipo per generare un password
            </p>
        </div>
    <?php } elseif (($lengthInput != 0) || (!is_null($lengthInput))) { ?>
        <div class="bg-info w-50 mx-auto mt-5 p-5">
            <p class="fs-2 text-success">
                <?php
                header('Location: ./showPassword.php');
                ?>
            </p>
        </div>
    <?php } elseif (($lengthInput <= 0)) { ?>
        <div class="bg-warning w-50 mx-auto mt-5 p-5">
            <p>
                I parametri inseriti non sono validi, prego rincontrollare.
            </p>
        </div>
    <?php } ?>
</body>

</html>