<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP strings</title>
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
        //za definisanje varijabli koristimo dolar znak
        $ime = "Nikola";
        $prezime ="Tesla"; 
        // u js-u smo koristili znak plus
        // u ph-u koristimo tacku za spajanje var sa stringom
        echo $ime." ".$prezime;
        ?>
    </h1>
</body>
</html>