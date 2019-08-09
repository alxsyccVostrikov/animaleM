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
        @import "./css/signup.css";
			</style>
      
      
      <!--Personal conf-->
        <!--css-->
      
      
        <!--js-->
          <!--<script src="./js/settings.js" ></script> -->
          <script src="./js/componentes/signup.js"></script>      
          <script src="./js/componentes/Button.js" ></script>
           <script src="./js/componentes/MenuBar.js" ></script>
          <script src="./js/index.js"></script>
          <script src="./js/functions.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      
  <!--    

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		   --> 
  		<body>
        <script>tst();</script>
				<form method="get" action="./php/functions/register.php">
          <script>
            SignupBase();
            formClear();
          </script>
				</form>
  </body>
</html>