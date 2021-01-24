<?php

require_once('conexao.php');

session_start();

$id = $_GET['id'];


if ($id == $_SESSION['idusuarios']) {

    $result = $link->query("DELETE FROM usuarios WHERE idusuarios = $id");

    if($result == true){
        session_destroy();

        echo "<script>
        alert('Conta Excluí­da com Sucesso!')
        window.location.href = '../index.html'
        </script>";
    } else {
        echo "<script>
        alert('Não foi Possível Excluir sua Conta!')
        window.location.href = '../index.html'
        </script>";
    }
} else {
    echo "<script>
    alert('Conta Excluída com Sucesso!')
    window.location.href = '../index.html'
    </script>";
}

