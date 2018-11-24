<?php
session_start();

$_SESSION["tarefa7"] = "Sandy canta muito";
$_SESSION["segunda"] = "pŕoxima page";
$_SESSION["terceira"] = "próxima page";
$_SESSION["quarta"] = "próxima page";


?>

    <a href="segunda.php">segunda.php</a>

<?php

print("<pre>");
var_dump($_SESSION);