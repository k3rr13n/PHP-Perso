<?php

$data = file_get_contents("./data/data.json");

$meyeur_data = json_decode($data, true);

$request = $_GET['brand'] ?? null;
$product = $_GET['title'] ?? null;

$laDonnee = array();
$stock = "";
// echo $product;
// print_r($meyeur_data);

function choose_value(string $parameter, array $dict): string
{
    foreach ($dict as $key=>$value) {
        if ($key == $parameter) {
            return $value;
        }
    }
    return "None";
}

function data(int $id, array $produit) { //Fonction qui affiche un produit en fonction de l'id
    $descProd = array();
    foreach ($produit as $key=>$value) {
        if ($key == $id){
            foreach ($value as $nom=>$desc) {
                $descProd[$nom] = $desc;
            }
        }
    }
    return $descProd;
}

// data(0, $meyeur_data);

?>