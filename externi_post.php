<?php
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $rezultat = $num1 + $num2;
}

?>


<h1> 
<?php echo $rezultat; ?> 
</h1>