<?php
//dva nacina za definisanje nizova 
//$niz = array(1,2), $niz = []
$naucnici = 
[
    
    [
        "ime" => "Nikola",
        "prezime" => "Tesla"
    ],
    [
        "ime" => "Majkl",
        "prezime" => "Faradej"
    ],
    [
        "ime" => "Rudjer",
        "prezime" => "Boskovic"
    ],
    array(
        "ime" => "Isak",
        "prezime" => "Njutn"
    )
];
echo $naucnici[0]["ime"]."<br><br><br>";
echo "<h4>Preko for each:</h4>";
foreach($naucnici as $value){
    echo $value["ime"]."<br>";
}
foreach($naucnici as $key=>$value){
    //za stpampanje niza
    print_r($naucnici[$key]);
    
    echo $naucnici[$key]["ime"]."<br>";
}
    
?>