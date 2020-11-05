<?php

require_once('conexao.php');

session_start();

$video = $_POST['video'];
$postagem = $_POST['post'];
$id = $_SESSION['id'];

if (strlen($postagem) > 0) {
       
    $result = $link->query("INSERT INTO postagens (video, conteudo, fk_usuario) VALUES ('$video', $postagem', '$id')");

    if ($result == true) {
        
        echo "
        <script>
            alert('Postagem Cadastrada com Sucesso!')
            location.href = 'home.php'
        </script>";

    }else {

        echo "
        <script>
            alert('Não foi Possível Cadastrar a Postagem!')
            location.href = 'home.php'
        </script>";

    }

}else {

    echo "
        <script>
            alert('Digite Algo para Postar!')
            location.href = 'home.php'
        </script>";

}