<!DOCTYPE html>
<html>
    <head>
        <title>script PHP </title>
</head>
<body>
<link rel="stylesheet" href="style.css">
<h3>
<?php
$age = rand(1, 100);
echo "age:" . $age;
?>
</h3>
<p>
    <?php
    if ($age < 10) 
        echo "enfant";
    elseif ($age < 20)
        echo "ado";
    elseif ($age < 40)
        echo "jeune";
    elseif ($age < 60)
        echo "adulte";
    else
        echo "vieux";
    ?>
</p>
</body>

    
    