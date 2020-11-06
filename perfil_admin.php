<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil Administrador</title>

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
              <li class="nav-item mx-auto">
                <a href="index.php">
                <img src="./img/leao.png" alt="logo do site" width="100px" />
                </a>
              </li>
              <li class="nav-item mx-auto active">
                  <a class="nav-link" href="perfil_usuario.php">
                    <img class="avatar mb-2 mx-auto" src="./img/avatar.png"
                    alt="foto do usuário">
                    <span> Meu Perfil - Adm</span> </a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="home.php"> Cursos <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="certificados.php"> Certificados </a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="parceiros.php"> Parceiros </a>
              </li>
              <li class="nav-item mx-auto">
                  <a class="nav-link" href="configuracao.php"> Configuração </a>
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
                          <a class="nav-link active">todos</a>
                          <a class="nav-link">meus cursos</a>
                          <a class="nav-link">menu</a>
                          <a class="nav-link">menu</a>
                          <a class="nav-link">menu</a>
                        </nav>
                  </div>         
                </div>
              </div>

              <!-- Tabela -->
              <div class="jumbotron jumbotron-fluid table-responsive">
                <h4 class="pb-2 d-flex justify-content-center">Todos os Usuários</h4>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Inscrição</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Outros</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>01/02/2020</td>
                    <td>São Paulo</td>
                    <td>SP</td>
                    <td>Receber newsletter</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>12/05/2019</td>
                    <td>São Paulo</td>
                    <td>SP</td>
                    <td>Receber newsletter</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>04/06/2020</td>
                    <td>São Paulo</td>
                    <td>SP</td>
                    <td>Receber newsletter</td>
                  </tr>
                </tbody>
              </table>
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

    <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
