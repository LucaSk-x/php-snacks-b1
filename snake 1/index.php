<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$team = [
    [
        "squadraCasa" => "Scafati",
        "puntiCasa" => "80",
        "squadraOspite" => "Cantù",
        "puntiOspite" => "75",
    ],
    [
        "squadraCasa" => "Verona",
        "puntiCasa" => "62",
        "squadraOspite" => "Udine",
        "puntiOspite" => "85",
    ],
    [
        "squadraCasa" => "Lecce",
        "puntiCasa" => "90",
        "squadraOspite" => "Parma",
        "puntiOspite" => "100",
    ],
    [
        "squadraCasa" => "Varese",
        "puntiCasa" => "95",
        "squadraOspite" => "Roma",
        "puntiOspite" => "45",
    ],
    [
        "squadraCasa" => "Ferrara",
        "puntiCasa" => "85",
        "squadraOspite" => "Firenze",
        "puntiOspite" => "100",
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
    <title>Snake 1</title>
</head>
<body>
    <div class="container">
        <div class="row flex-column g-3">
            <?php 
                for ($i=0; $i < count($team); $i++) { 
                    $partitaCorrente = $team[$i]
            ?>
                <div class="col">
                    <div class="card bg-success p-3">
                        <h3 class="text-center text-white text-uppercase">Squadre: </h3>
                        <div class="squad">
                            <h4 class="text-uppercase text-white text-center p-3"> <?php echo $partitaCorrente["squadraCasa"] . " - " . $partitaCorrente["squadraOspite"] ?></h4>
                            <h5 class="text-uppercase text-white text-center"> <?php echo $partitaCorrente["puntiCasa"] . " - " . $partitaCorrente["puntiOspite"] ?></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>