<?php
	require '../pdo/pessoa.php';
	require 'con.php';
	$jsonName=[];
	$js=["nome","sobrenome","conta"];
/*
Colocando os request setados na posição equivalente no $jsnonName

*/
	for($i=0;$i<sizeof($js);$i++)
		if(isset($_REQUEST[$js[$i]]))
			$jsonName[$i]=$_REQUEST[$js[$i]];
		else
			$jsonName[$i]=null;
	

  
	$p1 = new pessoa($jsonName[0],$jsonName[1],$jsonName[2]);
		$mthdGET=[$p1->getNome(),$p1->getSobrenome(),$p1->getConta()];
		$btn=$_REQUEST["btn"];	

	
	
	//metódo de inserção...,podendo ser reaproveitado lá na frente 
	function insert($con,$p1,$mthdGET){
		//$con->query("insert into ".$tabela[0]."(nome,sobrenome,conta)values('a','a','a')")->execute();
		$stmt=$con->prepare("insert into ".get_class($p1).$p1->GerarCampoParaBind()."values".$p1->GerarValueParaBind());
			for($i=0;$i<sizeof($p1->NomeDosAttr);$i++)
				$stmt->bindValue(":".$p1->NomeDosAttr[$i],$mthdGET[$i]);
				$stmt->execute();
				$stmt=null;
				$con=null;
		echo $p1->GerarValueParaBind();
		echo "<br>".$p1->GerarCampoParaBind();
	}

	

	//metódo de seleção...,podendo ser reaproveitado lá na frente 
	function select($con,$p1,$mthdGET){
		$pos=0;
  $usuarios=[];
		$stmt = $con->prepare("SELECT * FROM ".get_class($p1)." WHERE ".$p1->NomeDosAttr[$pos]."=:".$p1->NomeDosAttr[$pos]);
		$stmt->bindValue(":".$p1->NomeDosAttr[$pos], $mthdGET[$pos]); 
		$stmt->execute(); 
		$user = $stmt->fetchall();
		$stmt=null;
		$con=null;
			if(count($user)>0){
				foreach ($user as $row)
					for($i=0;$i<sizeof($p1->NomeDosAttr);$i++)
						//echo $p1->NomeDosAttr[$i].":".$row[$p1->NomeDosAttr[$i]]."<br />";
						//echo "<li>".$row[$p1->NomeDosAttr[$i]]."</li><br />";
						echo $row[$p1->NomeDosAttr[$i]].",";
            //$usuarios[$i]=$row[$p1->NomeDosAttr[$i]];
			}
			else{
				echo "<script>alert('Consult not found')</script>";
			}
   // return $usuarios;
  }	






	//metódo de updtin...,podendo ser reaproveitado lá na frente 
	function updt($con,$p1,$mthdGET){
		$pos=0;
		$NomeMudar=$REQUEST["NomeMudar"];  
    //$NomeMudar="debrian";  
    
		$stmt=$con->prepare("update pessoa set ".$p1->NomeDosAttr[$pos]."=:".$p1->NomeDosAttr[$pos]." where ".$p1->NomeDosAttr[$pos]."=\"".$NomeMudar."\"");
		$stmt->bindValue(":".$p1->NomeDosAttr[$pos], $mthdGET[$pos]); 
		$stmt->execute(); 
	}


	//codição do botão clickar na pagna "index.php",a depender do click valor do btn ele disparárá uma das funções,de acordo com o valor do btn
	switch($btn){
		case $p1->NomeBotaoSubmit[$i=0]:
			insert($con,$p1,$mthdGET);
		break;
		case $p1->NomeBotaoSubmit[++$i]:
			select($con,$p1,$mthdGET);
		break;
		case $p1->NomeBotaoSubmit[++$i]:
		break;
		case $p1->NomeBotaoSubmit[++$i]:
			updt($con,$p1,$mthdGET);
		break;
	}
