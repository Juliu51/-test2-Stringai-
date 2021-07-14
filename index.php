<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringai</title>
</head>
<body>
    <h1>Stringai</h1>
    <?php
    
//////////////////PIRMA UZDUOTIS//////////////
echo '<p> PIRMA UZDUOTIS </p>';
echo '<br>';
 
$pirmas = "Mantas Bum";
$antras = "Jonas Paulius";

echo $pirmas;
echo '<br>';
echo '<br>';

//////////////////ANTRA UZDUOTIS//////////////
echo '<p> ANTRA UZDUOTIS </p>';
echo '<br>';
    
$vardas = "Petras";
$pavarde = "Mykolas";

echo strtoupper($vardas) . " " . strtolower($pavarde);
echo '<br>';
echo '<br>';

 //////////////////TRECIA UZDUOTIS//////////////
echo '<p> TRECIA UZDUOTIS </p>';
echo '<br>';

$vardenis = "Antanas";
$pavardenis = "Naktis";

$Mixas = $vardenis[0] . $pavardenis[0];
echo $Mixas;  

echo '<br>';
echo '<br>';   
//////////////////KETVIRTA UZDUOTIS//////////////
echo '<p> KETVIRTA UZDUOTIS </p>';
echo '<br>';

$Vardas1 = "Kestas";
$Pavarde1 = "Zaibas";
$Mixas1 = substr($Vardas1, 3) . substr($Pavarde1, 3);

echo $Mixas1;

echo '<br>';
echo '<br>';  
//////////////////PENKTA UZDUOTIS//////////////
echo '<p> PENKTA UZDUOTIS </p>';
echo '<br>';

$America = 'An American in Paris';
$sub = array('A' , 'a');

echo str_replace($sub, '*', $America);
echo '<br>';
echo '<br>';  
//////////////////SESTA UZDUOTIS//////////////
echo '<p> SESTA UZDUOTIS </p>';
echo '<br>';
$America1 = 'An American in Paris';
$sub1 = 'a';


for($i = 0; $i < $America1.$length;$i++){

$q =+ strpos($America1);
}
echo $q;

    ?>
</body>
</html>