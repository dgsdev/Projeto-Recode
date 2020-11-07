<?php

session_start();

//Se não existir um valor do índice 'nome', então encerre a aplicação
if (!isset($_SESSION['idusuarios'])) {
    header('Location: index.php');
    exit;   
} else {

  require_once('conexao.php');

  $postagens = $link->query("SELECT * FROM postagens JOIN usuarios WHERE fk_usuario = id ORDER BY id_postagens DESC");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Novo Site</title>
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body style="background-color: #4d9fab !important;">
    <!-- Início do menu -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-lg-2 navbar navbar-expand-lg navbar-light d-flex 
          align-items-start">          
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
<div class="row">
          <div class="col collapse navbar-collapse pt-2" id="navbarSupportedContent">           
            <ul class="navbar-nav mr-auto d-flex flex-column">
              
              <li class="nav-item mx-auto">
                
                  <a class="nav-link" href="perfil_usuario.php">
                    <img class="avatar mb-2 mx-auto" src="<?php echo $_SESSION['imagem']; ?>"
                    alt="<?php echo $_SESSION['nome']; ?>">
                    <span> Meu Perfil </span> </a>
              </li>
              <li class="nav-item mx-auto active">
                  <a class="nav-link" href="home_cursos.php"> Cursos <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="#"> Certificados </a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="#"> Parceiros </a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="sair.php"> Sair </a>
              </li>
            </ul>
          </div>  
          
          <!--
          <div class="col">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          </div>
          -->
          </div>
        </nav>
          <!-- Fim do menu -->
          
          
          <!-- Início da seção de produtos -->
          <section class="container col-lg-9 mt-5 mb-5 painel-form">
            <div class="row">
              <div class="col-xl-12 text-center mt-2">
                <div class="properties__button text-center">
                        <nav class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                          <a class="nav-link active">todos</a>
                          <a class="nav-link">meus cursos</a>
                          <a class="nav-link">menu</a>
                          <a class="nav-link">menu</a>
                          <a class="nav-link">menu</a>
                        </nav>
                  </div>         
                </div>
              </div>
    
              <!-- Barra de busca -->
              <h4>Olá, <?php echo $_SESSION['nome']; ?>

              <div class="d-flex justify-content-end">
                <div class="input-group mt-3 mb-3 pr-0 col-lg-6">
                  <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn nova-cor text-white" type="button" id="button-addon2">Pesquisa</button>
                  </div>
                </div>
              </div>  

              

              <!-- Cards -->
                    <div class="row" style="text-align: center;">
                      <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/campo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Carinhosamente</h5>
                        <p class="card-text">Educação em Libras</p>
                        <a href="./player.php" class="btn nova-cor text-white">Video Libras</a>
                      </div>
                    </div>
                      </div>
                      
                      <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/campo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn nova-cor text-white">Go somewhere</a>
                      </div>
                    </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/campo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn nova-cor text-white">Go somewhere</a>
                      </div>
                    </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/campo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn nova-cor text-white">Go somewhere</a>
                      </div>
                    </div>
                      </div>  

                      <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/campo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn nova-cor text-white">Go somewhere</a>
                      </div>
                    </div>
                      </div>    

                      <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/campo.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn nova-cor text-white">Go somewhere</a>
                      </div>
                    </div>
                      </div>     
                  </div>
                </section>
                      <!-- Fim da seção de produtos -->
          </div>
        </div>
        <!-- Loading -->
        <div class="spinner-border text-info" role="status">
       <span class="sr-only">Loading...</span>
      </div>

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
