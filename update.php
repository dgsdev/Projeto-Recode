<?php

require_once('conexao.php');

session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}else {
  
  $_SESSION['nome']; 
  $_SESSION['imagem']; 
  $_SESSION['email']; 
  $_SESSION['idusuarios']; 
  $_SESSION['nascimento'];
  $_SESSION['apelido'];
  $_SESSION['sexo'];
  $_SESSION['endereco']; 
  $_SESSION['bairro']; 
  $_SESSION['cidade']; 
  $_SESSION['estado'];
  $_SESSION['pais']; 
  $_SESSION['cep'];
  $_SESSION['situacao'];
  $_SESSION['grau'];



  
}





?>