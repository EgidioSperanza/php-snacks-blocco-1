<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php if (
    key_exists('name', $_GET) &&
    key_exists('email', $_GET) &&
    key_exists('age', $_GET)
) {
    $username = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    if (
        strlen($username) > 3 &&
        strpos($email, '@') !== false &&//PHP8str_contains($email, ".") &&
        strpos($email, '.') !== false &&//PHP8str_contains($email, "@") &&
        is_numeric($age)
    ) {
        echo '<div class="login-ok"><p>accesso riuscito</p></div>';
    } else {
        echo '<div class="login-denied"><p>accesso Negato</p></div>';
    }
} else {
    echo '<div class="login"><p>Cortesementi inserisci nella barra indirizzo il tuo nome, la tua email e la tua età</br>
            Il formato per la query String è il seguente:<br/>
            ?name=tuonome&email=tuaemail&age=tuaetà<br/>
            Inoltre devi tener presente che il nomeinserito dovrà essere composto da almeno 4 caratteri,
            l\'email inserita per essere valida dovrà contenere al suo interno una @ e un . e che la tua età dovrà essere 
            espressa in formato numerico</p></div>';
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

</body>
</html>