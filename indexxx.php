<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jump | Plataforma colaborativa para deficientes auditivos. | Squad 8</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/style.css">
    </head>
<body>
   
<div class="container-fluid px-0">
    <video autoplay muted loop id="myVideo">
        <source src="./img/VID-20201102-WA0003.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video> 
    
    <!-- Transparência escura -->
    <div class="overlay"></div>

                <!-- Começo da nav-menu -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand text-light" href="index.php">
      <img src="./img/marca.svg" alt="Jump-logo" width="150px"/>
    </a>
      <button class="navbar-toggler btn btn-entrar" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        Entrar
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div class="navbar-nav ml-auto">                            
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-entrar btn-outline-info" data-toggle="modal" data-target="#exampleModal">
  Entrar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="login_usuario.php" method="post">

        <div class="form-group">
         <label for="email">Email</label>
         <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
        
        <div class="d-flex justify-content-around align-bottom">          
         <button type="submit" class="btn nova-cor btn-info bg-info" style="color: white;">Entrar</button>
          <a href="cadastro.php" class="pt-2" style="color: #0b9fb3b6;">Não tem cadastro? Faça o seu aqui</a>            
        </div>

      </form>

      </div>
      <div class="modal-footer">        
      </div>
    </div>
  </div>
</div>                        

 <!--Fim do dropdown-->
            </nav>
                        <!-- Fim da Nav-menu -->

                    <!-- começo da parte do texto -->
            <div id="content" class="col-lg-6 col-md-6 col-sm-6">
            <h2>JUMP</h2>
            <p style="font-size:1.1rem;">
            Jump é uma plataforma onde as pessoas podem, colaborativamente, subir traduções em LIBRAS para vídeos sem acessibilidade de maneira prática e fácil.
            </p>
            </div>
                    <!-- fim da parte do texto -->
            


                    <!-- inicio do rodape -->
            <footer id="rodape">    
            <p>Copyright &copy; SQUAD-8 - Recode PRO - 2020</p>

                    <!-- fim do rodape -->
                    
        </footer>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>