<?php
require "./php/functions/settings.php";
require "./php/functions/functions.php";
?>



<!DOCTYPE html>
  <html lang="<?php echo $lang;?>">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo getPageName();?></title>
    </head>
  
  
  <style>
    /*
  @import url("https://use.fontawesome.com/releases/v5.4.1/css/all.css");
  @import url("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css");
  </style>
  <!--scripts and css-->
  <link rel="stylesheet" href="./css/denuncia.css">
  <!--
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  -->   
  <!--  <script src="./js/settings.js" ></script> -->
  <script src="./js/componentes/Button.js" ></script>
  <script src="./js/componentes/MenuBar.js" ></script>
  <body>
    <script>
      tst();
    </script>
      <h1 align="center">Denúncia Animale</h1> 
      <p align="center">
        Para fazer sua denúncia certifique-se de está logado em umas das contas abaixo....
        nosso sistema faz integração com os sistemas abaixo!
      </p>
      <script>
        CriandoIcons("skype","instagram","facebook","yandex","whatsapp","telegram");
	     BotoesDenuncia();
      </script>
    </body>
</html>