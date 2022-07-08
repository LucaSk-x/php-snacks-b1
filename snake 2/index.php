<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato -->

<?php
    $userName = array_key_exists('name', $_GET) ? trim($_GET['name']) : '';
    $userMail = array_key_exists('mail', $_GET) ? trim($_GET['mail']) : '';
    $userAge = array_key_exists('age', $_GET) ? trim($_GET['age']) : '';

/*     $nameOk = false;
    $mailOk = false;
    $ageOk = false; */

    if(strlen($userName) >= 3) {
        $nameOk = true;
    };

    if (strpos($userMail, "@") && strpos($userMail, ".")) {
        $mailOk = true;
    };

    if (is_numeric($userAge)) {
        $ageOk = true;
    };
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Snake 2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="alert alert-<?php echo isset($nameOk, $mailOk, $ageOk) ? 'success' : 'danger' ?>">
                        <?php echo isset($nameOk, $mailOk, $ageOk) ? 'accesso consentito' : 'accesso negato' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>