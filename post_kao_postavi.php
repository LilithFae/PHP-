<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post PHP</title>
</head>
<body>
    U ovoj vezbi :<br>
    $_SERVER, <br>
    $_POST[].<br>
    
    <form action="post_kao_postavi.php" method="POST">
        <input type="number" name="number1" required>
        <input type="number" name="number2" required>
        <input type="submit" name="izracunaj">
     </form> 
 <?php
    //ukoliko imamo POST zahtev
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        echo $num1 + $num2;
    }
     ?>
</body>
</html>