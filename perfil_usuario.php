<?php

require_once('./backend/conexao.php');

session_start();

//Se não existir um valor do índice 'nome', então encerre a aplicação
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jump | Squad 8</title>
    <link rel="stylesheet" type="text/css" href="./css/perfil.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500;600&display=swap" rel="stylesheet">
    <script src="./js/funcoes.js"></script>
    <style>
     body {
       font-family: Confortaa, cursiva;       
     } 
  </style>
  </head>

  <body>
    <!-- Início do menu -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-lg-2 navbar navbar-expand-lg navbar-light d-flex 
        align-items-start">          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="col collapse navbar-collapse pt-2" id="navbarSupportedContent">           
          <ul class="navbar-nav mr-auto d-flex flex-column">
          
            </li>
              <img class="mb-2 mx-auto" width: 150px; src="./img/marca.svg"
                    alt="Jump">
            <li class="nav-item mx-auto active">
                <a class="nav-link" href="perfil_usuario.php">
                  <img class="border rounded-circle avatar mb-2 mx-auto" src="<?php echo $_SESSION['imagem']; ?>"
                  alt="<?php echo $_SESSION['nome']; ?>">
                  <span> Meu Perfil </span> </a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item mx-auto">
                <a class="nav-link" href="#"> Certificados </a>
            </li> -->
            <li class="nav-item mx-auto">
                <a class="nav-link" href="#"> Parceiros </a>
            </li>
            <li class="nav-item mx-auto">
            <a class="nav-link" href="./backend/sair.php"> Sair </a>
            </li>
          </ul>
          </div>
        </nav>
          <!-- Fim do menu -->
          
          <!-- Início da seção perfil -->
          <!-- Seção 1 -->
        <section class="container col-lg-9 painel-form mt-5">
          <div class="container-form">

            <form class="d-flex align-items-center mt-5" action="./backend/perfil.php" method="post">

                <div class="col-lg-3 d-flex justify-content-center">
                  <img src="<?php echo $_SESSION['imagem'] ?>" class="border rounded-circle avatar-perfil" alt="<?php echo $_SESSION['nome']; ?>">
                </div>
                
                <div class="col-lg-9">
                  <div class="row mb-3">
                   
                    <div class="col-lg-5">
                      <input type="url" class="border border-info rounded form-control form-grupo1" id="imagem" value="<?php echo $_SESSION['imagem']; ?>" name="imagem">
                      <small for="imagem">Imagem:</small>
                    </div>
                    <div class="col-lg-6">
                      <input type="text" class="border border-info rounded form-control form-grupo1" id="nome" value="<?php echo $_SESSION['nome']; ?>" name="nome">
                      <small for="nome">Nome:</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-5">
                      <input type="date" class="border border-info rounded form-control form-grupo1" id="nascimento" value="<?php echo $_SESSION['nascimento']; ?>" name="nascimento">
                      <small for="nascimento">Data de Nascimento:</small>
                    </div>
                    <div class="col-lg-6">
                      <select class="border border-info rounded form-control form-grupo1" id="sexo" name="sexo">
                        <option><?php echo $_SESSION['sexo']; ?></option>
                        <option>Feminino</option>
                        <option>Masculino</option>
                        <option>Prefiro não responder</option>                        
                      </select>                   
                    </div>
                  </div>
                </div> 
           
         </div>

         <!-- Seção 2 -->
         <div class="container-form">
           <br>
                <div class="col-lg-12">

                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-6">
                      <input type="text" class="border border-info rounded form-control form-grupo1" id="endereco" value="<?php echo $_SESSION['endereco']; ?>" name="endereco">
                      <small for="rua">Rua:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="text" class="border border-info rounded form-control form-grupo1" id="bairro" value="<?php echo $_SESSION['bairro']; ?>" name="bairro">
                      <small for="bairro">Bairro:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="text" class="border border-info rounded form-control form-grupo1" id="cidade" value="<?php echo $_SESSION['cidade']; ?>" name="cidade">
                      <small for="cidade">Cidade:</small>
                    </div>

                    <div class="col-lg-4 col-md-2">
                    <input type="text" class="border border-info rounded form-control form-grupo1" id="estado" value="<?php echo $_SESSION['estado']; ?>" name="estado">
                    <small for="estado">Estado:</small>
                    </div>

                    <div class="col-lg-4 col-md-4">
                    <input type="text" class="border border-info rounded form-control form-grupo1" id="cep" value="<?php echo $_SESSION['cep']; ?>" name="cep">
                    <small for="cep">CEP:</small>
                    </div>

                    <div class="col-lg-4 col-md-4">
                    <input type="text" class="border border-info rounded form-control form-grupo1" id="pais" value="<?php echo $_SESSION['pais']; ?>" name="pais">
                    <small for="pais">País:</small>
                    </div>
                  </div>
                </div>     
         </div>

         <!-- Seção 3 -->
         
          <div class="container-form mt-2">
            

            <?php
            $value=$_SESSION['situacao'];                   
            
            $result1 = ($value == "Ouvinte") ? "checked" : "";
           
            $result2 = ($value == "Surdo") ? "checked" : "";           
           
            $value=$_SESSION['grau'];  

            $result3 = ($value == "Leve") ? "checked" : "";
            
            $result4 = ($value == "Moderada") ? "checked" : "";
             
            $result5 = ($value == "Severa") ? "checked" : "";
            
            $result6 = ($value == "Profunda") ? "checked" : "";

            ?>
          
                <div class="col-lg-9">
                  <p>Em que situação se enquadra? </p>
                  <div class="row mb-3">
                    <div class="col-lg-3 col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="situacao" id="ouvinte" value="Ouvinte" <?php echo $result1; ?>>
                        <label class="form-check-label" for="ouvinte">
                          Ouvinte
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="situacao" id="surdo" value="Surdo" <?php echo $result2; ?>>
                      <label class="form-check-label" for="surdo">
                        Surdo
                      </label>
                    </div>
                    </div>
                  </div>             
                  <p> Grau de deficiência auditiva </p>
                  <div class="row">                    
                    <div class="col-lg-3 col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="grau" id="leve" value="Leve" <?php echo $result3; ?>>
                        <label class="form-check-label" for="leve">
                          Leve
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grau" id="moderada" value="Moderada" <?php echo $result4; ?>>
                      <label class="form-check-label" for="moderada">
                        Moderada
                      </label>
                    </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="grau" id="severa" value="Severa" <?php echo $result5; ?>>
                        <label class="form-check-label" for="severa">
                          Severa
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="grau" id="profunda" value="Profunda" <?php echo $result6; ?>>
                      <label class="form-check-label" for="profunda">
                        Profunda
                      </label>
                    </div>
                    </div>

                  </div>
                </div> 
           
         </div>

         <!-- Seção 4 -->
          <div class="container-form" style="border-bottom: none !important;">
        <br>
                <div class="col-lg-12">

                  <div class="row mb-3">
                    <div class="col-lg-4 col-md-6">
                      <input type="email" class="border border-info rounded form-control form-grupo1" id="email" value="<?php echo $_SESSION['email']; ?>" name="email">
                      <small for="email">Email:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="password" class="border border-info rounded form-control form-grupo1" id="senha" name="senha">
                      <small for="senha">Senha:</small>
                    </div>

                    <div class="col-lg-4 col-md-6">
                      <input type="password" class="border border-info rounded form-control form-grupo1" id="conf-senha" name="conf_senha">
                      <small for="conf-senha">Confirmar senha:</small>
                    </div>

                    <div class="col-lg-2 col-md-2 d-flex justify-content-center">
                    <button type="reset" class="btn nova-cor text-white mt-2"> Cancelar</button>                                       
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <button type="submit" class="btn nova-cor text-white mt-2">Atualizar</button>
                    </div>

                   
                    <section class="mt-5 p-5">
                    <div class="alert alert-danger form-control-sm" role="alert">
                    Cuidado! Ao Remover sua Conta, não Poderá ser Recuperada!
                    </div>
                    <button type="button" class="btn btn-danger" onclick="confirmar()">Remover Conta</button>
                    </section>

                  </div>
                </div> 
            </form>  
         </div>
      </section>
                      <!-- Fim da seção perfil -->
          </div>
        </div>



        <script>
          function confirmar(){
          let confirmacao = confirm("Você Realmente Deseja Excluir sua Conta?");

          if (confirmacao == true) {
        location.href = "./backend/remover_conta.php?id=" + <?php echo $_SESSION['idusuarios']; ?>
            }
          }
        </script>

      <!-- Plugin Vlibras -->
      <div vw class="enabled">
          <div vw-access-button class="active"></div>
          <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
          </div>
        </div>
          <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
          <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
          </script>
        </div>

    <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
