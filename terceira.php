<?php
session_start();

    $_SESSION["terceira"] = "Sandy canta muito";
    

?>

    <a href="quarta.php">quarta.php</a>

<?php

print("<pre>");
var_dump($_SESSION);