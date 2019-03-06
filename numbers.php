<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Numbers</title>
    <style>
        h2 {
            color: blueviolet;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: "Verdana";
            }
    </style>
</head>
<body>
    <h1>
        <?php
        $ime = "Nikola";
        $prezime = "Tesla";
        
        $godinaRodjenja = 1856;
        $danas = 2019;
        
        $napunioGodina = $danas - $godinaRodjenja;
        
        echo ($napunioGodina);
    ?>
    </h1>
</body>
</html>