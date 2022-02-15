<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php $day10 = [
    [
        'home_team' => 'Atlanta Hawks',
        'away_team' => 'Oklahoma City Thunder',
        'home_score' => 55,
        'away_score' => 60,
    ],
    [
        'home_team' => 'Charlotte Hornets',
        'away_team' => 'Chicago Bulls',
        'home_score' => 32,
        'away_score' => 84,
    ],
    [
        'home_team' => 'Cleveland Cavaliers',
        'away_team' => 'Denver Nuggets',
        'home_score' => 80,
        'away_score' => 60,
    ],
    [
        'home_team' => 'Milwaukee Bucks',
        'away_team' => 'Washington Wizards',
        'home_score' => 80,
        'away_score' => 77,
    ],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBOOLA</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>NBOOLA</h1>
    <h2>Tutti i risultati finali della decima giornata di campionato</h2>

    <?php for ($i = 0; $i < count($day10); $i++) { ?>
        <div class="game">
            <?php echo '<p>' . $day10[$i]['home_team'] . ' VS ' . $day10[$i]['away_team'] . '</p>';
            echo '<p class="score">' . $day10[$i]['home_score'] . ' | ' . $day10[$i]['away_score'] . '</p>';?>
        </div>
        
     <?php } ?>

</body>
</html>