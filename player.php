<?php

session_start();

//Se não existir um valor do índice 'nome', então encerre a aplicação
if (!isset($_SESSION['idusuarios'])) {
    header('Location: index.php');
    exit;   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jump | Carinhoso</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/stylo.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
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
              
                <img class=" mb-2 mx-auto" width: 150px; src="./img/marca.svg"
                    alt="Jump">
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="perfil_usuario.php">
                    <img class="avatar mb-2 mx-auto" src="<?php echo $_SESSION['imagem']; ?>"
                    alt="<?php echo $_SESSION['nome']; ?>">
                    
                    <span> Meu Perfil </span> </a>
              </li>
              <li class="nav-item mx-auto active">
                  <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>
              </li>
              <!--<li class="nav-item mx-auto">
                  <a class="nav-link" href="#"> Certificados </a>
              </li>-->
             
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="#"> Parceiros </a>
              </li>
              <li class="nav-item mx-auto">
              <a class="nav-link" href="./backend/sair.php"> Sair </a>
              </li>
            </ul>
          </div> 
          </div>
        </nav>
          <!-- Fim do menu -->

          <!-- Menu cortina -->
          <section class="container col-lg-9 mt-5 mb-5 painel-form">
            <div class="row">
              <div class="col-xl-12 text-center mt-2">
                <div class="properties__button text-center">
                        <nav class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                          <a class="nav-link active">Todos</a>
                          <a class="nav-link">Meus vídeos</a>
                          <!--
                          <a class="nav-link">Projetos</a>
                          <a class="nav-link">Seja Voluntário</a>
                          <a class="nav-link">Apoie</a>
                          <a class="nav-link">Contato</a>
                          -->
                        </nav>
                  </div>         
                </div>
              </div>

              <!-- Janela do Vídeo -->
              <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h4 class="pb-2 d-flex justify-content-center">Carinhoso - Demo</h4>
                <video controls class="w-100 meus_videos parado">
                    <source src="./video/carinhosamente_audio.mp4" type="video/mp4" />
                </video>
                <video id="vd2" class="w-20 meus_videos parado">
                    <source
                      src="./video/carinhosamente_libras.mp4"
                      type="video/mp4"
                    />
                </video>
                </div>
              </div>
            </section>
                     
          </div>
        </div>

<!-- JS para exibição dos vídeos -->
<script src="./js/jquery_video.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
      $( document ).ready(function($) {
        $('.parado').on('play', function() {
          $('.parado').each(function() {
            $(this).removeClass('parado').addClass('rodando');
            $(this).get(0).play();
          });
        });
        $('.parado').on('pause', function() {
          $('.rodando').each(function(){
            $(this).removeClass('rodando').addClass('parado');
            $(this).get(0).pause();
          });
        });
      });
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
