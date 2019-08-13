<?php
//session_start();
require "../functions/settings.php";
//$_SESSION["email"]=$_REQUEST["email"];
//echo "Welcome ".$_SESSION["email"];
require "../functions/functions.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo getPageName() ?></title>
</head>

    <style>
  @import "../../css/index.css";
  </style>
  
  
<!--   <script src="../../js/settings/settingsMenuBar.js"></script> -->
<!--   <script src="../../js/settings/settingsMenuLateral.js"></script> -->
  <script src="../../js/componentes/MenuLateralUser.js"></script>
  <script>
    MenuLateralUser("<?php echo $website;?>");
  </script>
  
  
  
  <body>
    <pre>
  <?php
//  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
setlocale(LC_ALL,'pt_BR');
    date_default_timezone_set('America/Sao_Paulo');
    
echo strftime("Bem vindo ".$_SESSION['email'].",  %A %d de %B de %Y");
  ?>
  </pre>
    

  
</body>
</html>