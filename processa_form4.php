<?php


echo "Nome: ".$_POST["nome"]."<br>";
echo "Sexo: ".$_POST["sexo"]."<br>";
echo "Matérias escolhidas: ";
    foreach($_POST["materias"] as $aulas){
        echo $aulas." , " ;
    }