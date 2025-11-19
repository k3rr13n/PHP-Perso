<?php
// Example of an indexed array
$fruits = array("apple", "banana", "cherry");

// Example of an associative array
$fruits = array("apple" => "red", "banana" => "yellow", "cherry" => "red");

foreach ($fruits as $key=>$value) {
    echo $key." = ".$value."<br>";
}

// Creating an array using square brackets
$fruits = ["apple", "banana", "cherry"];

for ($i=0; $i<count($fruits); $i++) {
    echo $fruits[$i]."<br>";
}

foreach ($fruits as $value) {
  echo $value."<br>";
}

// A finir
$liste = array("php", "html", "css", "pyhton");
$serveur = array();
$pos = 0;
for ($i=0;$i<count($liste);$i++) {
    if ($liste[$i] == "php" || $liste[$i] == "python")
        $pos ++;
        $serveur[$pos] = $liste[$i];
        // array_push($serveur, $langage);
}

echo $serveur;



?>