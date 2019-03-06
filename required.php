<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP empty</title>
</head>
<body>
 U ovoj vezbi : <br>
 empty()   
 
 <form action="required.php" method="post">
     <input type="text" name="ime"
     placeholder="Unesite vase ime">
     <input type="text" name="prezime" placeholder="Unesite vase prezime">
     <input type="text" name="email" placeholder="Unesite vas e-mail">
     <input type="submit">
 </form>
 
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ime"]||empty($_POST["prezime"]||empty($_POST["email"])) {
            echo "Ime je obavezno polje !";}
            else {
                echo $_POST["ime"];
            }
        }
   
    ?>
</body>
</html>