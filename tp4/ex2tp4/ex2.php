<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <?php

    $emails=array("php5@free.com","jean556@yahoo.fr","machine@wannado.fr","webmaster@wannado.fr","machine@wannado.fr","webmaster@wannado.fr","paul@gmail.fr","paul@gmail.fr","macafi@yahoo.fr","macafi@yahoo.fr");

    echo'<table><tr><th> Emails </tr></th>';
    for($i=0;$i<count($emails);$i++)
    {
        echo '<tr><td>'. $emails[$i] .'</td></th>';
    }
    echo'</table>';


    echo'<table><tr><th> Hebergeurs </tr></th>';
    for($i=0;$i<count($emails);$i++)
    {
       $tab[$i]=explode('@',$emails[$i]);
       $tab2[$i]=explode('.',$tab[$i][1]);
       $tab3[$i]=$tab2[$i][0];
       echo '<tr><td>'. $tab2[$i][0] .'</td></tr>';
    }
    echo'</table>';
    
    echo '<h2> affichage des hebergeurs selon leur frequence dapparition </h2>';
    $occurences=array_count_values($tab3);
    asort($occurences);
    echo '<table>';
    foreach($occurences as $heberg => $occ)
    {
       echo '<tr><td>'. $heberg .'</td><td>'.$occ.'</td></th>';
    }
    echo '</table>';

    $max_occ=max($occurences);
    $min_occ=min($occurences);

    echo '<h2> Frequence d apparition des hebergeurs Min-MAx</h2>';
    echo '<table>';
    foreach($occurences as $heberg => $occ)
    {
        $class = '';
        if ($occ == $max_occ) {
            $class = "max-freq";
        } elseif ($occ == $min_occ) {
            $class = "min-freq";
        }
        echo '<tr><td class=' . $class . '>' . $heberg . '</td><td>' . $occ . '</td></tr>';
    }
    echo '</table>';
    ?>
</body>
</html>