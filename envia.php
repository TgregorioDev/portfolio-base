<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);

    $para = "gregoriotiago947@gmail.com";
    $assunto = "Coleta de clientes - Tiago Gregório";

    $corpo = "Nome: ".$nome."\n"."E-Mail: ".$email."\n"."Telefone para contato: ".$celular;

    $cabeca = "From: tiagotelesqa@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-Mail enviado com sucesso!");
    }
    else{
        echo("Houve um erro ao enviar o E-Mail!");
    }
?>