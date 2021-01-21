<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Squad-8</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="./css/cadastro.css">
    </head>
<body>
   
<div class="container-fluid px-0 d-flex justify-content-center">
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="index.php">Início<span class="sr-only">(Página atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#"></a>
                            </li>
                    
                    
                    <!-- começo do dropdown 
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Entrar</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ação</a>
                                <a class="dropdown-item" href="#">Outra ação</a>
                                <a class="dropdown-item" href="#">Algo mais aqui</a>
                            </div>
                            </li>
                    </ul>
                </div>

                        Fim do dropdown-->
            </nav>
                        <!-- Fim da Nav-menu -->
            
                    <!--inicio formulário-->
        <div id="cadastro" class="col-lg-6 col-md-8 col-sm-6">

                <form method="post" action="./backend/cadastro_usuario.php">

                <legend><strong>Cadastre-se</strong></legend>
                <p>
                    <label for="nome_cad">Digite seu nome completo:</label>
                    <input id="nome_cad" name="nome" required="required" type="text" />
                </p>

                <p>
                    <label for="identificacao_cad">Como quer ser identificado:</label>
                    <input id="identificacao_cad" name="apelido" required="required" type="text" />
                </p>
                <p>
                    <label for="identificacao_cad">Coloque Link Imagem de Perfil:</label>
                    <input id="identificacao_cad" name="imagem" type="url" />
                </p>

                <p>
                    <label for="email_cad">Digite seu e-mail:</label>
                    <input id="email_cad" name="email" required="required" type="email" />
                </p>


                <p>
                    <label for="cad_senha">Digite sua senha</label>
                    <input id="cad_senha" name="senha" required="required" type="password" />
                </p>
                <p>    
                    <label for="conf_senha">Confirme sua senha</label>
                    <input id="conf_senha" name="conf_senha" required="required" type="password" />
                </p>
                <br>

                <!--cont... menu opções

                <div class="radio">
                    <p>Em qual situação se enquadra?</p>
                    
                    <input type="radio" value="Surdo" name="situacao" id="surdo" />
                    <label for="surdo">Surdez</label>
                    <input type="radio" value="Def. Auditiva" name="situacao" id="auditiva" />
                    <label for="auditiva">Def. auditiva</label>
                    <input type="radio" value="Ouvinte" name="situacao" id="ouvinte" />
                    <label for="ouvinte">Ouvinte</label>
                    <input type="radio" value="Outros" name="situacao" id="outros" />
                    <label for="outros">Outros</label>
                </div> -->

                <!--fim formulário-->
                
                <br>
                <button type="submit" class="btn btn-info w-25">Enviar</button>
                    
            </form>

        </div>

                    <!-- inicio do rodape -->
            <footer id="rodape">    
            <p>Copyright &copy; SQUAD-8 - Recode PRO - 2020</p>

                    <!-- fim do rodape -->
        </footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>