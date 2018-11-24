<?php

    echo "O aluno chamado: ".$_POST["nome"]."<br>";
    echo "Do sexo: ".$_POST["sexo"]."<br>";
    echo "Estuda as diciplinas de ";
        foreach($_POST["materias"] as $aulas){
            echo $aulas. " , ";
        }
    echo "<br><br>";

    echo "Formulário de pedido: ".$_POST["resenha"];