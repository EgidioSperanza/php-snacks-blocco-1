<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$randIntArray = [];
while (count($randIntArray) < 15) {
    $number = rand(1, 100);

    if (!in_array($number, $randIntArray)) {
        $randIntArray[] = $number;
    }
}

// var_dump($randIntArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I nostri 15 numeri random compresi da 1 a 100 sono:</h1>
    <?php for ($i = 0; $i < count($randIntArray); $i++) {
        if ($i === count($randIntArray) - 1) {
            echo $randIntArray[$i];
        } else {
            echo $randIntArray[$i] . ' - ';
        }
    } ?>
</body>
</html>