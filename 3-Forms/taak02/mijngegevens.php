<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br/> Voornaam is:" . $_POST["voornaam"];
        echo "<br/> Achternaam is:" . $_POST["achternaam"];
        echo "<br/> Klas is:" . $_POST["klas"];
        echo "<br/> Leeftijd is:" . $_POST["leeftijd"];
        echo "<br/> Adres is:" . $_POST["adres"];
        echo "<br/> Plaatsnaam is:" . $_POST["plaatsnaam"];
        echo "<br/> Favoriete muziekband is:" . $_POST["favmuziekband"];
        
        echo "<br/>" . $_POST["vrouw"];
        echo "<br/>" . $_POST["man"]
    ?>
</body>
</html>