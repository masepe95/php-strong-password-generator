<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Show Password</title>
</head>

<body class="bg-secondary text-light">
    <h1 class="text-center p-5 bg-dark">
        La tua password generata è:
    </h1>
    <div class="bg-info mx-auto mt-5 p-5">
        <p class="fs-2 text-success">
            <?php
            session_start();
            echo $_SESSION['generatedPassword'];
            ?>
        </p>
    </div>
</body>

</html>