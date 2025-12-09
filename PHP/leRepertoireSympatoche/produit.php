<?php
include "fonction.php";
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
        <?php
            echo "<h1>".$product."</h1>";
        ?>
    </header>
    <table class="tableau">
        <thead>
            <tr>
                <td> Nom </td>
                <td> Description </td>
                <td> Prix </td>
                <td> Reduction </td>
                <td> Marque </td>
                <td> Note </td>
                <td> Stock </td>
                <td> Categorie </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php

                $i = 0;
                foreach ($meyeur_data as $key=>$value) {
                    if ($value["title"] == $product){

                        $laDonnee = data($i, $meyeur_data);
                        echo "<td>".choose_value("title", $laDonnee)."</td>";
                        echo "<td>".choose_value("description", $laDonnee)."</td>";
                        echo "<td>".choose_value("price", $laDonnee)."</td>";
                        echo "<td>".choose_value("discountPercentage", $laDonnee)."%</td>";
                        echo "<td>".choose_value("brand", $laDonnee)."</td>";
                        echo "<td>".choose_value("rating", $laDonnee)."</td>";

                        $stock = choose_value("stock", $laDonnee);
                        echo "<td>".$stock."</td>";
                        echo "<td>".choose_value("category", $laDonnee)."</td>";

                    }
                $i += 1;
                }

                ?>
            </tr>
        </tbody>
    </table>
    <form class="remplissage_panier" action="panier.php" method="post">
        <div>Quantité <input type="number" name="panier[quantite]" value="1" min="0" max="<?php echo $stock; ?>"></div>
        <br>
        <div>Code Promo <input type="text" name="panier[code]" value=""></div>
        <br>
        <div><input type="hidden" name="panier[idP]" value="<?php echo choose_value("id", $laDonnee); ?>"></div>

        <input type="submit" value="Ajouter">
    </form>
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
