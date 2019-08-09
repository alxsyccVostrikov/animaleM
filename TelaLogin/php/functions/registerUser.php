<?php
require "settings.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
  
  <link rel="stylesheet" href="../../css/registerUser.css">
  <script src="../../js/componentes/MenuBar.js"></script>
<body>

  <script>tst("../../");</script>


  
  <?php
//require "../classes/con.php";
//require "../classes/pessoa.php";
//$p1=new pessoa();
//$con=new con();
//for($i=0;$i<sizeof($p1->NomeAttr);++i$)
//$stmt=$con->prepare("insert into get_class($p1) $p1->GerarCampoParaBind values $p1->GerarValueParaBind");
//$stmt.bindValue(":".$p1->NomeAttr[$1],$paramUrl[$i]);
//$stmt.execute();
//$stmt=null;
//$con=null;


$paramUrl;



echo "<h1>Obrigado por seu Cadastro,Agora já pode se logar no nosso Serviço</h1>";
echo "Confira os Dados Registrados<br>";
  for($i=0;$i<count($NomeDosAttr);++$i)
    echo $NomeDosAttr[$i].":".$_REQUEST[$NomeDosAttr[$i]]."<br>";
  ?>  
</body>
</html>
