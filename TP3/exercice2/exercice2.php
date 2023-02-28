<!DOCTYPE html>
<html>
    <head>
        <title>script PHP </title>
</head>
<body>
<link rel="stylesheet" href="style3.css" #haut>
<div>
<?php
    
        for ($i = 65; $i <= 90; $i++) {
             echo "<h2>";
             echo chr($i) . " | ";
             echo "</h2>";
             
    
        for ($j= 0; $j <= 100; $j++){
        echo "texte ";
        
       }
       echo "<br>";
       echo " <a href='' >Haut</a>";
       echo "<br>";
    }
    

    

?>
</div>
</body>