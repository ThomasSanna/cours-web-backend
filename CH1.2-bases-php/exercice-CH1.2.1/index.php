<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>
    <?php
    $date = Date("j/m/Y");
    $heure = Date("H");
    echo "<h3> Nous sommes le $date et il est $heure heures. </h3>"
    ?>
    <?php
    if ($heure < 12){
        $message = "Bonne journée";
    }
    if ($heure >= 12 && $heure < 20 ){
        $message = "Bonne après-midi";
    }
    if ($heure >= 12 && $heure > 20 ){
        $message = "Bonne soirée";
    }

    echo "$message les L2SPI"
    ?>
</body>
</html>