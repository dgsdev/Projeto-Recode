<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./js/funcoes.js"></script>
  </head>

  <body>
    <!-- Início do menu -->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning " ">
      <a href="index.php">
        <img src="./imagens/logo.jpg" alt="logo do site" width="100px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item">
            <a class="nav-link" href="perfil.php">
          <!--    <img class="avatar" src="./img/avatar.png"
            alt="foto do usuário"> --> <span> Meu Perfil </span> </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="cursos.php"> Cursos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="certificados.php"> Certificados </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="parceiros.php"> Parceiros </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="configuracao.php"> Configuração </a>
        </li>
      </ul>
      </div>
    </nav>
      <!-- Fim do menu -->

      <header>
        <h1 style="text-align: center;">Cursos</h1>
      </header>
      <hr />

    <div class="row">
      <div class="col-xl-12 text-center">
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
      <form class="form-inline d-flex justify-content-center">
        <div class="form-group mt-2 mb-2">
          <input type="text" class="form-control" id="pesquisa" name="pesquisa">
        </div>
        <button type="submit" class="btn btn-primary mt-2 mb-2">Pesquisa</button>
      </form>

        <!-- Início da seção de produtos -->
        <section class="container col-lg-8">
          <div class="row" style="text-align: center;">
            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            </div>
              
      
        </div>
        <!-- Fim da seção de produtos -->
      </section>

      <!--Garantias  -->
      <section class="container bg-warning" id="#garantias">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Id, dolor! Repellat, error in nisi fugiat minima quidem 
                          ratione perspiciatis iste, libero sapiente saepe atque quo 
                          cum numquam, sit incidunt quibusdam?
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                            <div>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Id, dolor! Repellat, error in nisi fugiat minima quidem 
                              ratione perspiciatis iste, libero sapiente saepe atque quo 
                              cum numquam, sit incidunt quibusdam?
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                                <div>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                  Id, dolor! Repellat, error in nisi fugiat minima quidem 
                                  ratione perspiciatis iste, libero sapiente saepe atque quo 
                                  cum numquam, sit incidunt quibusdam?
                                </div>
                            </div>
                        </div>
                  </section>
                
                <footer class="rodape">
                  <h4>Formas de Pagamento</h4>
                  <!-- <img src="./imagens/f-pagamento.jpg" alt="formas de pagamento" /> -->
                      <section class="container bg-dark text-white">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Id, dolor! Repellat, error in nisi fugiat minima quidem 
                              ratione perspiciatis iste, libero sapiente saepe atque quo 
                              cum numquam, sit incidunt quibusdam?
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                                <div>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                  Id, dolor! Repellat, error in nisi fugiat minima quidem 
                                  ratione perspiciatis iste, libero sapiente saepe atque quo 
                                  cum numquam, sit incidunt quibusdam?
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div>
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                      Id, dolor! Repellat, error in nisi fugiat minima quidem 
                                      ratione perspiciatis iste, libero sapiente saepe atque quo 
                                      cum numquam, sit incidunt quibusdam?
                                    </div>
                                </div>
                            </div>
                      </section>
      <p>&copy 2020 Recode Pro.</p>
    </footer>
    </div>

    <!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
