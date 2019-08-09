<?php
require "settings.php";
//require "php/classes/con.php";
//require "../classes/con.php";
//require "php/functions/settings.php";


function cadastr($conn){
  $st=$conn->query("insert into pessoa(nome,sobrenome,email,password)values('a','a','a',md5('a'))");
  $st->execute();
  $st=null;
  $conn=null;
}



function cadastro($p1,$conn,$mthdGET){
//$stmt=$conn->prepare("insert into ".get_class($p1).$p1->GerarCampoParaBind()."values(:nome,:sobrenome,:email,md5(:password))");
$stmt=$conn->prepare("insert into ".get_class($p1).$p1->GerarCampoParaBind()."values".$p1->GerarValueParaBind());
  for($i=0;$i<count($p1->NomeDosAttr);++$i){
   $stmt->bindValue(":".$p1->NomeDosAttr[$i],$mthdGET[$i]);
  //if($p1->NomeDosAttr[$i]=="password")
 //$stmt->bindValue(":".$p1->NomeDosAttr[$i],"md5(".$_REQUEST[$p1->NomeDosAttr[$i]].")");
}
  $stmt->execute();
				$stmt=null;
				$conn=null;
}



function Imprimir($p1,$mthdGET,$NomeDosAttr){
 for($i=0;$i<count($p1->NomeDosAttr);++$i)
 echo "Welcome:".$_REQUEST[$p1->NomeDosAttr[$i]]."<br>";
//$p1->setNome("alan");
 for($i=0;$i<count($p1->NomeDosAttr);++$i)
 echo $NomeDosAttr[$i].":".$mthdGET[$i]."<br>";
  //$mthdSET[$p1->NomeDosAttr[$i]]=$_REQUEST[$p1->NomeDosAttr[$i]];
   //$REQUEST[$p1->NomeDosAttr[$i]];
}
                           
                           
//Imprimir($p1,$mthdGET,$NomeDosAttr);
cadastro($p1,$conn,$mthdGET);
//cadastr($conn);
