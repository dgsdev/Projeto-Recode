<?php

require_once('conexao.php');

session_start();

//Se não existir um valor do índice 'nome', então encerre a aplicação
if (!isset($_SESSION['nome']) && !isset($_SESSION['idusuarios'])) {
    header('Location: ../index.php');
    exit;
}

$idusuario = $_SESSION['idusuarios'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$imagem = $_POST['imagem'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$situacao = $_POST['situacao'];
$grau = $_POST['grau'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$pais = $_POST['pais'];
/*
echo '<br> Nome: '.$nome;
echo '<br> Apelido: '.$apelido;
echo '<br> Imagem: '.$imagem;
echo '<br> Email: '.$email;
echo '<br> Senha: '.$senha;
echo '<br> Confirmação: '.$conf_senha;
echo '<br> Situação: '.$situacao;
echo '<br> Grau: '.$grau;
echo '<br> Data de Nascimento: '.$nascimento;
echo '<br> Endereço: '.$endereco;
echo '<br> Bairro: '.$bairro;
echo '<br> Cidade: '.$cidade;
echo '<br> Estado: '.$estado;
echo '<br> CEP: '.$cep;
echo '<br> País: '.$pais; */

if($senha == $conf_senha) {
    
    $senha_cripto = md5($senha);     
    
    /*  $sql = "UPDATE INTO `usuarios` (`idusuarios`, `nome`, `apelido`, `imagem`, `email`, `senha`, `conf_senha`, `situacao`, `grau`, `sexo`, `nascimento`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `pais`) 
    VALUES (NULL, '$nome', '$apelido', '$imagem', '$email', '$senha_cripto', '', '$situacao', '$grau', '$sexo', '$nascimento', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$pais')"; */
    
    $update = "UPDATE `usuarios` SET `nome`= '$nome',`apelido`= '$apelido', `imagem`='$imagem', `email`='$email', `senha`='$senha_cripto', `situacao`='$situacao', `grau`='$grau', `sexo`='$sexo', `nascimento`='$nascimento', `endereco`='$endereco', `bairro`='$bairro', `cidade`='$cidade', `estado`='$estado', `cep`='$cep', `pais`='$pais' WHERE `idusuarios` = '$idusuario'";
    
    $link->query($update); 
    
    if ($link == true) {
        
        echo "<script>
        alert('Atualizado com Sucesso!')
        window.location.href = '../index.php'
        </script>";
    } else {
        echo "<script>
        alert('Não foi possível fazer atualização!')
        window.location.href = './perfil.php'
        </script>";
    }
} else {
    
    echo "<script>
    alert('Sua senhas não coincidem!')
    window.location.href = './perfil.php'
    </script>";
}
    
?>
