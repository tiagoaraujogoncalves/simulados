<?php

//declarar as variaveis que recebidas pelo método post

//em alguns servidores register_global=on ou =off

$nome=$_POST[nome];

$email=$_POST[email];

$assunto=$_POST[assunto];

$fone=$_POST[fone];

$mensagem=$_POST[mensagem];



//direcionamento dos dados para um email qualquer

mail("tiagoag152@gmail.com","$assunto","
Nome: $nome
Email: $email
Assunto: $assunto
Telefone: $fone
Mensagem: $mensagem","FROM:$nome<$email>");



echo "sua mensagem foi enviada com sucesso!"; //msg no navegador da pessoa que enviou o email 



?> 

