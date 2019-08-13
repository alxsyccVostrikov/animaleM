<?php
//session_start();
require "../functions/settings.php";
require "../functions/functions.php";

?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo getPageName() ?></title>
</head>
  
      <style>
  @import "../../css/vars.css";
  </style>
  
 <script src="../../js/componentes/MenuLateralUser.js"></script>
  <script>
    MenuLateralUser("<?php echo $website;?>");
  </script>
<body>
  <?php
  //echo "Caixa de entrada de ".$_SESSION['email'];
?>
  
</body>
</html>