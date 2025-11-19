<?php
    $myVAr = 'Prepare variables.'; // simple

    // From Superglobals vars
    $whatTimeIsIt = $_SERVER['REQUEST_TIME'];
    $request = $_GET['who'] ?? null;
    phpinfo(INFO_VARIABLES);
    date_default_timezone_set('Europe/Paris')

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li>variable myVAr est <?php echo $myVAr ?></li>
        <li>variable whateTimeIsIt est <?php echo date("d/m/Y H:i", $whatTimeIsIt)?></li>
        <li>variable request est <?php echo $request ?></li>
    </ul>
</body>
</html>
