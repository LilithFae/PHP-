<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saberi dva broja</title>
      <style>
        h1 {
            color: mediumblue;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: "Verdana";
            }
    </style>
    <?php 
    function saberi($a, $b) {
        ispisi ($a+$b);
        // umesto ispisi smo mogli da napisemo echo i dobili bismo isti rezultat
        }
    function ispisi($rezultat) {
        echo $rezultat;
    }
    ?>
</head>
<body>
    <?php saberi(4,4) ?>
</body>
</html>