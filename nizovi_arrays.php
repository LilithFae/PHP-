<?php
//klasicni nizovi

$naucnici = ["Nikola Tesla", "Majkl Faradej", "Luj Paster"];

echo $naucnici[0]."<br>";
echo $naucnici[1]."<br>";
echo $naucnici[2];
?>

<br><br>

<?php
//asocijativni nizovi

$naucniciA = [
    "Motor" => "Nikola Tesla",
    "Indukcija" => "Majkl Faradej",
    "Biologija" => "Luj Paster"];

$data = "";
    
    echo $naucniciA["Indukcija"];

//php moze stampati i javascript kod

echo 
    '<script>console.log("'.$naucniciA["Indukcija"].'")<?script>';

function stampa($poruka) {
    echo '<script>console.log("'.$poruka.'")</script>';
}
?>
