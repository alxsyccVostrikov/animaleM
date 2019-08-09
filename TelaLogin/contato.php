<?php
require "./php/functions/settings.php";
require "./php/functions/functions.php";
?>



<!DOCTYPE html>
  <html lang="<?php echo $lang;?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getPageName();?></title>
  <head>

  
  <style>
    /*
    @import url("https://use.fontawesome.com/releases/v5.4.1/css/all.css");
    @import url("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css");
    */
  </style>
  
   <!--Global settings-->
      <!--css--> 
    <link rel="stylesheet" href="./css/contato.css">
  
  
    <!--js-->
    <!--     <script src="./js/settings.js" ></script> -->
    <script src="./js/componentes/Button.js" ></script>
    <script src="./js/componentes/MenuBar.js" ></script>
  
  
  <body>
    <script>
      //creating NavBarMenu
      tst();
    </script> 
    
    
    <h1 align="center">
      Contato Animale
    </h1>
    <p align="center">
      Para entrar em contato com a equipe animale siga nos nas redes,ou envie nos um email.Para
      Para enviar nos um curriculo add ao assunto o tema e enviar nos por "EMAIL".
      
    </p>
    <script>
      //creating ReportLink automatically mode
     CriandoIcons("instagram","telegram","facebook","google");
     LinkDenuncia();
    </script>
  </body>
</html>