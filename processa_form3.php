<?php

echo "Nome do aluno(a): " .$_POST["nome"]."<br>";
echo "Período: ";

    if($_POST["periodo"]=="M"){
        echo "Manhã";
    }elseif($_POST["periodo"]=="T"){
        echo "Tarde";
    }else{
        echo "Noite";
    }

    echo "<br><br>";
    print("<pre>");
    var_dump($_POST);



