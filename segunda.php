<?php
session_start();

$_SESSION["segunda"] = "Sandy canta muito";



?>

    <a href="terceira.php">terceira.php</a>


<?php

print("<pre>");
var_dump($_SESSION);

