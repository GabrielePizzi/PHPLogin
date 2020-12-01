<html>
<?php
$path = "scriptCredenziali.php";
include($path);
echo "Ciao " . $_COOKIE["user"] . "!</br>";
echo "visite: " . $_SESSION["visite"] . "</br>";


    $file = fopen("voti.txt", "r");
    if(!$fp) die ("Errore nell'apertura del file");

    $data = fread($file, 10);
    echo $data;





    ?>
</html>