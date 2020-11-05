<?php

require_once('conexao.php');

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$imagem = $_POST['imagem'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];


echo '<br> Nome: '.$nome;
echo '<br> Apelido: '.$apelido;
echo '<br> Imagem: '.$imagem;
echo '<br> Email: '.$email;
echo '<br> Senha: '.$senha;
echo '<br> Confirmação: '.$conf_senha;


if(strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {

    $senha_cripto = md5($senha);     
    
    $sql = "INSERT INTO usuarios (nome, apelido, imagem, email, senha) VALUES ('$nome', '$apelido', '$imagem', '$email','$senha_cripto')";
    
    $link->query($sql);
     
    echo "<script>
    alert('Cadastro efetuado!')
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
    alert('Digite um Apelido para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";

}
else if (strlen($imagem) <= 3){

    echo "<script>
    alert('Coloque uma imagem para realizar o cadastro!')
    window.location.href = 'cadastro.php'
    </script>";
  
}
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