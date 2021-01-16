<?php
// teste
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
  <title>Jump | Squad 8</title>
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
              <img class=" mb-2 mx-auto" width: 150px; src="./img/marca.svg"
                    alt="Jump">
              <li class="nav-item mx-auto">
                
                  <a class="nav-link" href="perfil_usuario.php">
                   
                    <br>
                    <img class="avatar mb-2 mx-auto" src="<?php echo $_SESSION['imagem']; ?>"
                    alt="<?php echo $_SESSION['nome']; ?>">
                    <br>
                    <span> Meu Perfil </span> </a>
              </li>
              <li class="nav-item mx-auto active">
                  <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>
              </li>
             <!-- <li class="nav-item mx-auto">
                  <a class="nav-link" href="#"> Certificados </a>
              </li> -->
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
                <a class="nav-link active">Todos</a>
                <a class="nav-link">Meus cursos</a>
                <!--
                          <a class="nav-link">menu</a>
                          <a class="nav-link">menu</a>
                          <a class="nav-link">menu</a> -->
              </nav>
            </div>
          </div>
        </div>

        <!-- Barra de busca -->
        <h4>Olá, <?php echo $_SESSION['nome']; ?>

          <div class="d-flex justify-content-end">
            <div class="input-group mt-3 mb-3 pr-0 col-lg-6">
              <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Pesquisar contéudo em libras...">
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
                  <h5 class="card-title">Carinhoso</h5>
                  <p class="card-text">Música com intérprete em Libras. Educação e Cultura também para surdos.</p>
                  <a href="./player.php" class="btn nova-cor text-white">Assistir Libras</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://image.freepik.com/fotos-gratis/mulheres-adultas-se-comunicando-atraves-da-linguagem-gestual_23-2148590459.jpg" alt="Libras">
                <div class="card-body">
                  <h5 class="card-title">Aprenda Libras</h5>
                  <p class="card-text">A língua brasileira de sinais é a língua de sinais usada por surdos como meio de comunicação e expressão.</p>
                  <a href="#" class="btn nova-cor text-white">Começar...</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/libras.jpg" alt="Libras">
                <div class="card-body">
                  <h5 class="card-title">Libras para Crianças</h5>
                  <p class="card-text">Aprender Língua brasileira de sinais desde a infância Ajuda no acesso a educação.</p>
                  <a href="#" class="btn nova-cor text-white">Saiba mais...</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/libras2.webp" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Seja Voluntário</h5>
                  <p class="card-text">Você é intérprete de Libras? Participe da comunidade!</p>
                  <a href="#" class="btn nova-cor text-white">Saiba Mais...</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/libras2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Envie seu vídeo em Libras</h5>
                  <p class="card-text">Com sua ajuda podemos dar acesso a educação de qualidade para pessoas com Deficiência Auditiva.</p>
                  <a href="#" class="btn nova-cor text-white">Contribua...</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/12/19/10/16/hand-1917895_960_720.png" alt="unidos">
                <div class="card-body">
                  <h5 class="card-title">Seja nosso Parceiro</h5>
                  <p class="card-text">Você quer impactar a vida de surdos na sua região? Entre em contato conosco!</p>
                  <a href="#" class="btn nova-cor text-white">WhatsApp </a>
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
