<?php

require_once('conexao.php');

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if (strlen($email) > 3 && strlen($senha) > 3) {
    
    // Execução da instrução SQL
    /*$resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha'");*/
    $resultado_consulta = $link->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

    //$usuarios recebe lista de usuários
    $usuarios = mysqli_fetch_assoc($resultado_consulta);

    $_SESSION['nome'] = $usuarios["nome"];
    $_SESSION['imagem'] = $usuarios["imagem"];
    $_SESSION['email'] = $usuarios["email"];
    $_SESSION['id'] = $usuarios["id"];

    header('Location: home.php');

}if ($resultado_consulta == true){

    echo "<script>
     location.href = 'home.php'
    </script>"; 

}else {

    echo "<script>
    alert('E-mail ou Senha Inválidos!')
    location.href = 'index.php'
    </script>";
}


?>