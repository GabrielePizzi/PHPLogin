<?php

session_start();
if (isset($_SESSION["visite"]))
    $_SESSION["visite"]++;
else
    $_SESSION["visite"] = 1;
    // unset($_SESSION["visite"]); --> ELIMINA UN ELEMENTO DALL'ARRAY
    //session_destroy();
    echo "visite: " . $_SESSION["visite"] . "</br>";
?>

<?php
print_r($_COOKIE);
echo "<br/>";

if (isset($_COOKIE["user"])) {
    header("Location: home.php");
    $_COOKIE["sessione"] = $_SESSION;
    //echo "Ciao " . $_COOKIE["user"] . "!";
    //setcookie("nome", "", time()-3600);
} else {
    echo "benvenuto per la prima volta";
}
if (isset($_COOKIE["tentativi"]) = $_COOKIE["user"]){       //PROVA1 tentativi
    $_COOKIE["tentativi"]++
}else {
}

    
setcookie("sessione", $_SESSION["visite"], time() + (60*60));
// echo $_COOKIE["nome"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stileLogin.css" rel="stylesheet" type="text/css"> <!-- Connessione con file CSS -->
</head>

<body>

    <h2>Pagina di login</h2>

    <form action="home.php" method="post">
        <div class="imgcontainer">
            <img src="https://www.piemontetopnews.it/wp-content/uploads/2018/08/Giovanni-Bosco-1-1024x547.jpg" class="avatar">
        </div>

        <div class="container">

            <label for="username"><b>Username</b></label>

            <input type="text" placeholder="Inserisci Username" name="username" required> <!-- Stile definito uguale a PSW -->
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Inserisci Password" name="psw" required>

            <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <span class="psw">Dimenticato <a href="forgotPassword.php">password?</a></span>
        </div>
    </form>

</body>

</html>
