<!-- ## Snack 4
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
    $uniqueNumber= [];


    for ($i= 0; $i < 15; $i++) { 
    $number = rand(1, 100);


    if (!in_array($number, $uniqueNumber)) {
        $uniqueNumber[] = $number;
    };
}   
var_dump($number);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Snake 4</title>
</head>
<body>
    <div>
        <?php
            for ($i=0; $i < count($uniqueNumber); $i++) { 
                
            ?>
            <div class="container">
                <div class="card card-body">
                    <div class="card-title">
                        <span class="fw-bold text-center"><?php echo $uniqueNumber[$i] ?></span>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
    </div>
</body>
</html>