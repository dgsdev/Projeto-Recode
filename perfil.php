<?php

require_once('conexao.php');

session_start();

//Se não existir um valor do índice 'nome', então encerre a aplicação
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}

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

if(strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {

    $senha_cripto = md5($senha);     

    $sql = "INSERT INTO `usuarios` (`idusuarios`, `nome`, `apelido`, `imagem`, `email`, `senha`, `conf_senha`, `situacao`, `grau`, `sexo`, `nascimento`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `pais`) 
    VALUES (NULL, '$nome', '$apelido', '$imagem', '$email', '$senha_cripto', '', '$situacao', '$grau', '$sexo', '$nascimento', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$pais')";

    $link->query($sql);
     
    echo "<script>
    alert('Atualizado com Sucesso!')
    window.location.href = 'index.php'
    </script>";
    
}
else if ($senha != $conf_senha){

    echo "<script>
    alert('As senhas devem ser iguais, tente novamente!')
    window.location.href = 'cadastro.php'
    </script>";
   
}
else if (strlen($nome) <= 3){

    echo "<script>
    alert('Digite um nome válido para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";
  
}
else if (strlen($apelido) <= 3){

    echo "<script>
    alert('Digite um nome válido para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";

}
/*else if (strlen($imagem) == 0){

    echo "<script>
    alert('Coloque uma imagem para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";
  
}*/
else if (strlen($email) <= 3 ){

    echo "<script>
    alert('Digite um e-mail válido para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";
    
}
else if (strlen($senha) <= 3){

    echo "<script>
    alert('Digite uma senha válida para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";
    
}

?>
