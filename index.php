<?php

//Exercices 1
$y = 0;
for ($i = 0 ; $i < 10 ; $i++){
    $y++;
    echo $y ."<br>";
}
echo "<br>";

//Exercices 2
$zero = 0;
$entre = 50;

while ($zero < 20){
    $operation = $zero*$entre;
    echo $operation . "<br>";
    $zero++;
}
echo "<br>";

//Exercices 3
$cent = 100;
$deux = 2;

while ($cent > 10){
    $lol = $cent*$deux;
    echo $lol . "<br>";
    $cent--;
}
echo "<br>";

// Exercices 4
$one = 1;

while ($one == 10){
    echo $one;
    $moitie = 0.5;
    echo $one + $moitie;
    $one++;
}
echo "<br>";

//Exercice 5
for ($i = 1 ; $i < 15 ; $i++){
    echo "On y arrive presque" ."<br>";
}
echo "<br>";

//Exercice 6
for ($i = 20; $i > 0 ; $i--){
    echo "C'est presque bon" ."<br>";
}
echo "<br>";

//Exercice 7
for ($i = 1; $i < 100 ; $i+=15){
    echo "On tient le bon bout" ."<br>";
}
echo "<br>";

//Exercice 8
for ($i = 0; $i < 200; $i+=12){
    echo "Enfin !!" ."<br>";
}
