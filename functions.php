<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Funkcije</title>
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
   
        <?php
        function godineNikoleTesle(){
            $ime = "Nikola";
            $prezime = "Tesla";
            
            $godinaRodjenja = 1856;
            $danas = 2019;
        
            $napunioGodina = $danas - $godinaRodjenja;
            
        echo($napunioGodina);
        }
        ?>
         <h1>
         <?php godineNikoleTesle(); ?>
    </h1>
</body>
</html>