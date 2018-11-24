<?php
session_start();

    $_SESSION["quarta"] = "Sandy canta muito";
    
?>


<?php
print("<pre>");
var_dump($_SESSION);