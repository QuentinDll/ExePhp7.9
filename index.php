<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 7</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <h1>Exercice 7</h1>
            <a href="http://exephpp9/">Index</a>
        </nav>
        <p>
            <?php
            // recup du jour
            $date = date("d-m-Y");
            // convertion en timestamp et ajout de 20 jours
            $dateP = strtotime(date("d-m-Y", strtotime($date)) . " +20 day");
            // affichage de la var
            echo date('d-m-Y', $dateP);
            ?>
        </p>
    </body>
</html>
