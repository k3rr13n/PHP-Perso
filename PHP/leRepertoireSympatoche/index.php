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
            if (is_null($request)) {
                echo "<h1>Tout les produits</h1>";
            }
            else{
                echo "<h1>Tout les produits ".$request."</h1>";
            }
        ?>
    </header>
    <table class="tableau">
        <thead>
            <tr>
                <td> Nom </td>
                <td> Description </td>
                <td> Prix </td>
                <td> Marque </td>
                <td> Détails </td>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0;
                foreach ($meyeur_data as $key=>$value) {
                    echo "<tr>";

                    if (is_null($request)) {
                        if ($value["id"] == $i+1){
                            echo "<td>".choose_value("title", data($i, $meyeur_data))."</td>";
                            echo "<td>".choose_value("description", data($i, $meyeur_data))."</td>";
                            echo "<td>".choose_value("price", data($i, $meyeur_data))."</td>";
                            echo "<td>".choose_value("brand", data($i, $meyeur_data))."</td>";

                            echo "<td><a href='/produit.php?title=".$value["title"]."'>Détails</td>";
                        }
                    }

                    if ($value["brand"] == $request){
                        if ($value["id"] == $i+1){
                            echo "<td>".choose_value("title", data($i, $meyeur_data))."</td>";
                            echo "<td>".choose_value("description", data($i, $meyeur_data))."</td>";
                            echo "<td>".choose_value("price", data($i, $meyeur_data))."</td>";
                            echo "<td>".choose_value("brand", data($i, $meyeur_data))."</td>";

                            // echo "<td><a href='/?title=".$value["title"]."'>Détails</td>";
                            echo "<td><a href='/produit.php?title=".$value["title"]."'>Détails</td>";
                        }
                    }
                    $i += 1;
                    echo "</tr>";
                }
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
