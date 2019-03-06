<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
   <h1>Dodati mnozenje i deljenje</h1>
    <form action="kalkulator.php" method="post">
       <input type="number" name="number1" required>
       <input type="number" name="number2" required>
       <br><br>
       <input type="submit" value="+" name="saberi">
       <input type="submit" value="-" name="oduzmi">
       <input type="submit" value="*" name="pomnozi">
       <input type="submit" value="/" name="podeli">
    
   </form>
   <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        
        if (!empty($_POST['saberi'])) {
            echo $num1 + $num2;
        }
    if (!empty($_POST['oduzmi'])) {
        echo $num1 - $num2;
    }
        if(!empty($_POST['pomnozi'])){
            echo $num1 * $num2;
        }
    if(!empty($_POST['podeli'])){
        echo $num1 / $num2;
    }
    }
    ?>
</body>
</html>