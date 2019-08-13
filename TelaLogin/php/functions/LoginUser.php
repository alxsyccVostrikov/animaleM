<?php
session_start();
require "./settings.php";
$_SESSION["email"]=$_REQUEST["email"];;
echo "Welcome ".$_SESSION["email"];
require "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo getPageName();?></title>
</head>
<body>
  
  
  <style>
  @import "../../css/index.css"
  </style>
  <script src="../../js/componentes/MenuLateralUser.js"></script>
  <script>
    MenuLateralUser();
  </script>
  
</body>
</html>