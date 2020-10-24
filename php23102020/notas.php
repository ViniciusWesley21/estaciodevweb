<?php 

$nota = $_GET['nota'];

    if($nota >= 7){

        print("Parabéns, você foi aprovado");
        print("<p>");

    }else{
        print("Você terá que fazer aulas de recuperação");
        print("<p>");
    }

    print("A sua nota final foi :". $nota);
    print("<p>"); 

?>