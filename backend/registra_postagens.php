<?php

require_once('conexao.php');

session_start();

$postagem = $_POST['post'];
$id = $_SESSION['id'];

if (strlen($postagem) > 0) {   
       
    $result = $link->query("INSERT INTO postagens (conteudo, fk_usuario) VALUES ('$postagem', '$id')");

    if ($result == true) {
        
        echo "
        <script>
            alert('Postagem Cadastrada com Sucesso!')
            location.href = '../home.php'
        </script>";

    }else {

        echo "
        <script>
            alert('Não foi Possível Cadastrar a Postagem!')
            location.href = '../home.php'
        </script>";

    }

}else {

    echo "
        <script>
            alert('Digite Algo para Postar!')
            location.href = '../home.php'
        </script>";

}

/*
$video = $_POST['video'];
$postagem = $_POST['post'];
$id = $_SESSION['id'];

if (strlen($postagem) > 0) {
       
    $result = $link->query("INSERT INTO postagens (videoprincipal, titulo, descricao, imagemcard, videolibras, fk_usuario) VALUES ('$videoprincipal', $titulo', '$descricao', '$imagemcard', 'videolibras')");
*/
 /*   if ($result == true) {
        
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

}*/
