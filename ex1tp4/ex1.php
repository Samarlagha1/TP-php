<!DOCTYPE html>
<html>
    <head>
        <title>Premier script PHP </title>
        <!-- la balise meta permet aux utilisateurs -->
<link rel="stylesheet" href="style.css">
</head>

<body>
    
  <?php
    $mois=array(
        "janvier"=>31,
        "fevrier"=>28,
        "mars"=>31,
        "avril"=>30,
        "may"=>31,
        "juin"=>30,
        "juillet"=>31,
        "aout"=>31,
        "septembre"=>30,
        "Octobre"=>31,
        "Novembre"=>30,
        "Decembre"=>31);
    echo"<table border=1>
    <tr><th>Mois</th>
    <th>Nombre de jours</th></tr>";
    foreach($mois as $cle=> $valeur )
    {
        echo "<tr><td>$cle</td><td>$valeur</td></tr>";
    }
    echo"</table>";
    ?>
</body>
</html>