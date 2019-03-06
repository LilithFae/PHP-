<?php
$naucnici = ["Nikola Tesla", "Majkl Faradej", "Luj Paster"];
for($i=0; $i<count($naucnici); $i++) {
    
    echo $naucnici[$i]."<br>";
}
echo count($naucnici);
echo "<br><br><br>";
//primer sa while petljom
    
    $a =0;
while($a<3) {
    echo $naucnici[$a]."<br>";
    $a++;
}
?>