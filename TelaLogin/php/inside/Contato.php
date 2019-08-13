<?php
//session_start();
require "../functions/settings.php";
require "../functions/functions.php";

//classes

?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo getPageName();?></title>
</head>
  
      <style>
  @import "../../css/vars.css";
  </style>
 <script src="../../js/componentes/MenuLateralUser.js"></script>
  <script>
   MenuLateralUser();
   //MenuLateralUser("<?php echo $website;?>");
  </script>
<body>
  <pre><span><b>Contato:</b></span>
  <?php

  foreach(array_keys($infoContato) as $index => $key){
        echo $key.":".$infoContato[$key]."\n";
}
?>
  </pre>
  
  <h1>
    Meus Contatos
  </h1>
  <pre>
  
  </pre>
</body>
</html>