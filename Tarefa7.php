<?php
session_start();

$_SESSION["tarefa7"] = "SIM";
$_SESSION["segunda"] = "NAO";
$_SESSION["terceira"] = "NAO";
$_SESSION["quarta"] = "NAO";
$_SESSION["quinta"] = "NAO";
$_SESSION["sexta"] = "NAO";

?>

    <a href="segunda.php">segunda.php</a>

<?php

print("<pre>");
var_dump($_SESSION);