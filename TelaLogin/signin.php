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
  */
  </style>
  
  <!--global settings-->
    <!--css-->
  <link rel="stylesheet" href="./css/sigin.css">
    
    <!--js-->
  <script src="./js/componentes/Button.js" ></script>
  <script src="./js/componentes/MenuBar.js" ></script>
  <script src="./js/functions.js" ></script>
  <!--<script src="./js/settings.js" ></script> -->
  <script src="./js/componentes/sigin.js"></script>
    
  
  <body>
    <script>
      tst();
    </script>
  
  
  
  
    <div class="container">
      <form action="./php/functions/LoginUser.php">
        <script>
        /*
        creates login component choose the style
        */
        let date=new Date();
       formatDateToString(date)
        switch(dd+"/"+MM){
               case "01/01":
               SiginWithSocialIntegration("facebook","twitter");
          break;
               case "0/0":
               SiginWithForgetPass();
          break;
               case "25/12":
               SantaClowsLogin();
          break;
                default:
                 BaseSigin();
          break;
               }
        </script>
      </form>
    </div>

  </body>
</html>
