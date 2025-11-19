<?php

function modulo(){
    for ($i=0; $i<10; $i++) {
        if ($i % 2 == 0){
            // echo "Le nombre " + $i + " est paire";
            // echo "<br>";
            echo "<p>Le nombre ".$i." est paire</p>";
        }
        else {
            echo "<p>Le nombre ".$i." est impaire</p>";
        }
    }
}

echo modulo();

?>