
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <?php
            if (isset($_POST['nom'])){
                echo $_POST['nom'] . "<br>";
            }

            echo $_POST['email'] . "<br>";
        ?>
    </body>
</html>