<?php
include "fonction.php";
// phpinfo(INFO_VARIABLES);

print_r($_REQUEST['panier']);

$_SESSION['panier'][$_REQUEST['panier']['idP']] = $_REQUEST['panier']

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="titre">
        <h1>Panier</h1>
    </header>
    <table class="tableau">
        <thead>
            <tr>
                <td> ID </td>
                <td> Nom </td>
                <td> Prix </td>
                <td> Reduction </td>
                <td> Prix après reduction </td>
                <td> Quantité </td>
                <td> Code promo </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                // if (isset($_POST['nom'])){
                //     echo $_POST['nom'] . "<br>";
                // }

                // echo $_POST['email'] . "<br>";

                // $i = 0;
                // foreach ($meyeur_data as $key=>$value) {
                //     if ($value["title"] == $product){
                        $laDonnee = data($_POST['panier']['idP'], $meyeur_data);
                        
                        echo "<td>".$_POST['panier']['idP']."</td>";
                        echo "<td>".choose_value("title", $laDonnee)."</td>";
                        echo "<td>".choose_value("price", $laDonnee)."€</td>";

                        echo "<td>".choose_value("discountPercentage", $laDonnee)."%</td>";
                        $reduc = intdiv((100-choose_value("discountPercentage", $laDonnee))*choose_value("price", $laDonnee), 100);
                        echo "<td>".$reduc."€</td>";

                        echo "<td>". $_POST['panier']['quantite']."</td>";
                        echo "<td>". $_POST['panier']['code']."</td>";

                //     }
                // $i += 1;
                // }

                ?>
            </tr>
        </tbody>
    </table>
    <nav class="navigation">
        <ul class="list_elem">
            <li class="d"><a href="/"> Tout les produits </li>
            <li><a href="/?brand=Apple"> Apple </li>
            <li><a href="/?brand=Samsung"> Samsung </li>
            <li><a href="/?brand=OPPO"> OPPO </li>
            <li><a href="/?brand=Huawei"> Huawei </li>
            <li><a href="/?brand=Microsoft Surface"> Microsoft Surface </li>
            <li><a href="/?brand=Infinix"> Infinix </li>
            <li><a href="/?brand=HP Pavilion"> HP Pavilion </li>
        </ul>
    </nav>
</body>
</html>
