<?php

require_once('conexao.php');

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3) {
    $senha_cripto = md5($senha);

 
    // Execução da instrução SQL
    /*$resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha'");*/
   $resultado_consulta = $link->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha_cripto'");

    //$usuarios recebe lista de usuários
    $usuarios = mysqli_fetch_assoc($resultado_consulta);

    $_SESSION['nome'] = $usuarios["nome"];
    $_SESSION['imagem'] = $usuarios["imagem"];
    $_SESSION['email'] = $usuarios["email"];
    $_SESSION['idusuarios'] = $usuarios["idusuarios"];
    $_SESSION['nascimento'] = $usuarios["nascimento"];
    $_SESSION['apelido'] = $usuarios["apelido"];
    $_SESSION['sexo'] = $usuarios["sexo"];
    $_SESSION['endereco'] = $usuarios["endereco"];
    $_SESSION['bairro'] = $usuarios["bairro"];
    $_SESSION['cidade'] = $usuarios["cidade"];
    $_SESSION['estado'] = $usuarios["estado"];
    $_SESSION['pais'] = $usuarios["pais"];
    $_SESSION['cep'] = $usuarios["cep"];
    $_SESSION['situacao'] = $usuarios["situacao"];
    $_SESSION['grau'] = $usuarios["grau"];
    

 /*   echo $usuarios["nome"];
    echo $usuarios["imagem"];
    echo $usuarios["email"];
    echo $usuarios["idusuarios"]; */

    header('location: ../home.php');

}if ($resultado_consulta == true){

    echo "<script>
     location.href = '../home.php'
    </script>"; 

}else {

    echo "<script>
    alert('E-mail ou Senha Inválidos!')
    location.href = '../index.php'
    </script>";
}


?>