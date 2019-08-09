<?php
/*
require './classes/pessoa.php';
$p1=new pessoa();

$NomeDosAttr=$1->NomeDosAttr;


function GerarValueParaBind(){
			$this->NomeAttr="";
			$virg=",";
			$doisp=":";
   
				for($i=0;$i<count($this->NomeDosAttr);$i++)
					if($i==count($this->NomeDosAttr)-1)
						$this->NomeAttr.=$doisp.$this->NomeDosAttr[$i];
      
					else
						$this->NomeAttr.=$doisp.$this->NomeDosAttr[$i].$virg;
				
		
   
			return "(".$this->NomeAttr.")";
   
		}
  
  
  
		function GerarCampoParaBind(){
			$virg=",";
			$this->NomeAttr="";
   
				for($i=0;$i<count($this->NomeDosAttr);$i++)
					if($i==count($this->NomeDosAttr)-1)
						$this->NomeAttr.=$this->NomeDosAttr[$i];
					else
						$this->NomeAttr.=$this->NomeDosAttr[$i].$virg;
				
			
			return "(".$this->NomeAttr.")";
   
		}

*/

function getPageName(){
  return ucfirst(basename($_SERVER['PHP_SELF'],".php"));  
  }
  