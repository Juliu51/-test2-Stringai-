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

if(strlen($pirmas) < strlen($antras)) {
echo $pirmas;
} else {
    echo $antras;
}
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
$America1 = substr_count(strtolower($America1), strtolower("a"));
echo $America1;

echo '<br>';
echo '<br>';  
//////////////////SEPTINTA UZDUOTIS//////////////
echo '<p> SEPTINTA UZDUOTIS </p>';
echo '<br>';

$Stringas =  'An American in Paris';
$tarpas = '';
$ra = array();
$ra[0] = '/A/';
$ra[1] = '/a/';
$ra[2] = '/Ą/';
$ra[3] = '/a/';
$ra[4] = '/E/';
$ra[5] = '/e/';
$ra[6] = '/Ę/';
$ra[7] = '/Ė/';
$ra[8] = '/ė/';
$ra[9] = '/I/';
$ra[10] = '/i/';
$ra[11] = '/Į/';
$ra[12] = '/į/';
$ra[13] = '/Y/';
$ra[14] = '/y/';
$ra[15] = '/O/';
$ra[16] = '/o/';
$ra[17] = '/U/';
$ra[18] = '/u/';
$ra[19] = '/Ų/';
$ra[20] = '/ų/';
$ra[21] = '/Ū/';
$ra[22] = '/ū/';


$res = preg_replace($ra, $tarpas, $Stringas);
echo $res;
echo '<br>';

$Stringas1 = "Breakfast at Tiffany's";
$Stringas2 = "2001: A Space Odyssey";
$Stringas3 = "It's a Wonderful Life";
echo preg_replace($ra, $tarpas, $Stringas1);
echo '<br>';
echo preg_replace($ra, $tarpas, $Stringas2);
echo '<br>';
echo preg_replace($ra, $tarpas, $Stringas3);
echo '<br>';
echo '<br>';
//////////////////ASTUNTA UZDUOTIS//////////////
echo '<p> ASTUNTA UZDUOTIS </p>';
echo '<br>';

$str1 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $str1;
echo '<br>';
$str = substr($str1, strpos($str1, 'Episode '));
$array = explode(" ", $str);
echo $array[1];

//////////////////DEVINTA UZDUOTIS//////////////
echo '<p> DEVINTA UZDUOTIS </p>';
echo '<br>';

$fraze = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo $fraze;
echo '<br>';
$ArrayFraze = explode(" " , $fraze);
$count = 0;

for ($i=0; $i < count($ArrayFraze) ; $i++) {
    $FrazeCount = $ArrayFraze[$i];
   if(strlen($FrazeCount) <= 5) {
       ++$count;
   }
 }
echo $count; 
echo '<br>';
////////////////////////
$fraze2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$ArrayFraze2 = explode(" " , $fraze2);
$count = 0;

for ($i=0; $i < count($ArrayFraze2) ; $i++) {
    $FrazeCount2 = $ArrayFraze2[$i];
   if(strlen($FrazeCount2) <= 5) {
       ++$count;
   }
 }
echo $count; 
echo '<br>';
//////////////////DESIMTA UZDUOTIS//////////////
echo '<p> DESIMTA UZDUOTIS </p>';
echo '<br>';

$letters = array_merge(range('a','z'),range('A','Z'));
 
echo strtolower($letters[rand(0,51)] . $letters[rand(0,51)] . $letters[rand(0,51)]);
echo '<br>';

//////////////////PAPILDOMA UZDUOTIS//////////////
echo '<p> DESIMTA UZDUOTIS </p>';
echo '<br>';

$StringasFraze = $fraze . " " . $fraze2;
$Masyvas = explode(" " , $StringasFraze);
$Skaicius = (count($Masyvas)) - 1;
$RndSkaicius = $Masyvas[rand(0,$Skaicius)] . " ";


for ($i=0; $i < 10 ; $i++) {
    echo $Masyvas[rand(0,$Skaicius)] . " ";
}
    ?>
</body>
</html>


