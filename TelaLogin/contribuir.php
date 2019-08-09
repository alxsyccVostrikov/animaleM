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
  
    
    <!--bootsrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  
    <!--js-->
    <script src="./js/componentes/Button.js" ></script>
    <script src="./js/componentes/MenuBar.js" ></script>
    <!--   <script src="./js/settings.js" ></script> -->
  
  
  
   <!--css-->
   <link rel="stylesheet" href="./css/contribuir.css">
  

    <body>
      <script>
        tst();
      </script>
  
  
  
  
  

      <h1 align="center">Contribuição</h1> 
        <p align="center">
         Se você também curtiu o nosso trabalho,a meneira como desenvolvemos nosso potêncial,ajude nos a crescer com esse projeto,
            ajude nos a dá um conforte para os animais que vivem constantemente em situação de maus tratos,abandono!
        </p>
    
      <script>
        CriandoIcons("telegram","patreon");
        LinkDenuncia();
      </script>

    </body>
  </html>