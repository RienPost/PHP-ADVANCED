<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br/> De artiest is:" . $_GET["artiest"];
        echo "<br/> De titel is:" . $_GET["titel"];
        echo "<br/> Jaar van uitgave is:" . $_GET["jaarvanuitgave"];
        echo "<br/> Muzieksoort is:" . $_GET["muzieksoory"];
        //http://localhost/php-advanced/php-advanced/3-Forms/taak03/mijnmuziek.php?artiest=billy+joel&titel=piano+man&jaarvanuitkomst=1974&muzieksoort=geen+idee&verstuur=verstuur
    ?>
</body>
</html>

