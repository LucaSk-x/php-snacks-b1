<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $alunni = [
        [
        "nome" => "Michele",
        "cognome" => "Gialli",
        "voti" => [4, 7, 9, 4, 6]
        ],
        [
        "nome" => "Cosimo",
        "cognome" => "Rossi",
        "voti" => [4, 3, 9, 4, 10]
        ],
        [
        "nome" => "Malo",
        "cognome" => "Malox",
        "voti" => [8, 8, 8, 8, 8, 10]
        ],
        [
        "nome" => "Omar",
        "cognome" => "Neri",
        "voti" => [5, 7, 9, 9, 10]
        ],
        [
        "nome" => "Mattia",
        "cognome" => "Violi",
        "voti" => [6, 5, 3, 8, 4]
        ],
    ];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Snake 7</title>
</head>
<body>
    <div class="container">
        <div class="row row-cols-5">
            <?php for($i=0; $i < count($alunni); $i++) {
                $alunno = $alunni[$i];
                $sommaVoti = 0;
                ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="nome"><span class="fw-bold">Nome: </span><?php echo $alunno['nome'] ?></div>
                            <div class="cognome"> <span class="fw-bold">Cognome: </span><?php echo $alunno['cognome'] ?></div>
                            <div class="voti"><span class="fw-bold">Media voti: </span>
                                <?php for($k=0; $k < count($alunno['voti']); $k++) { $sommaVoti += $alunno['voti'][$k];}?>
                                    <span> <?php echo $sommaVoti / count($alunno['voti']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>