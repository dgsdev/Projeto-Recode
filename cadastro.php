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
                <a class="navbar-brand text-light" href="#"><b>LOGO</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="#">Inicio<span class="sr-only">(Página atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Cursos</a>
                            </li>
                    
                    <!-- começo do dropdown -->
                            
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

                        <!--Fim do dropdown-->
            </nav>
                        <!-- Fim da Nav-menu -->
            
                    <!--inicio formulário-->
        <div id="cadastro" class="col-lg-6 col-md-8 col-sm-6">
            <form method="post" action="">

                <legend>Cadastre-se</legend>
                <p>
                    <label for="nome_cad">Digite seu nome completo:</label>
                    <input id="nome_cad" name="nome" required="required" type="text" />
                </p>

                <p>
                    <label for="identificacao_cad">Como quer ser identificado:</label>
                    <input id="identificacao_cad" name="identificacao" required="required" type="text" />
                </p>

                <p>
                    <label for="email_cad">Digite seu e-mail:</label>
                    <input id="email_cad" name="email" required="required" type="email" />
                </p>


                <div class="senha">
                    <label for="cad_senha">Digite sua senha</label>
                    <input id="cad_senha" name="senha_cad" required="required" type="password" />
                    <label for="conf_senha">Confirme sua senha</label>
                    <input id="conf_senha" name="conf_senha" required="required" type="password" />
                </div>
                <br>

                <!--cont... menu opções-->

                <div class="checkbox">
                    <p>Em qual situação se enquadra?</p>
                    <input type="checkbox" value="" name="opcao1" id="opc_surdez" />
                    <label for="checkbox">Surdez</label>
                    <input type="checkbox" value="" name="opcao2" id="opc_def" />
                    <label for="checkbox">Def. auditiva</label>
                    <input type="checkbox" value="" name="opcao3" id="opc_nenhum" />
                    <label for="checkbox">Nenhum</label>
                    <input type="checkbox" value="" name="opcao4" id="opc_outros" />
                    <label for="checkbox">Outros</label>
                </div>

                <!--fim formulário-->
                
                <br>
                    <button type="submit" class="btn nova-cor">Enviar</button>
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