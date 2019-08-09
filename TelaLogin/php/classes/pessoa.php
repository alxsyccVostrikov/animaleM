<?php
	class pessoa{
		public $nome;
		public $sobrenome;
		public $conta;
		public $email;
    public $password;
		public $NomeDosAttr=["nome","sobrenome","email","password"];  
   // public $mthdGET=[getNome(),getSobrenome(),getEmail(),getPassword()];
    //public $NomeBotaoSubmit=["Cadastrar","Consultar","Deletar","Atualizar"];
  //  public $usuarios=["alam","mk","5"];
  
		function __construct($nome=null,$sobrenome=null,$email=null,$password=null){
			$this->nome=$nome;
			$this->sobrenome=$sobrenome;
			$this->email=$email;
      $this->password=$password;
		}  
  
  
		public function setNome($nome){
			$this->nome=$nome;
    
		}
  
		
		
		public function getNome(){
			return $this->nome;
		}
  
  
		
		
		function setSobrenome(){
			$this->sobrenome=$sobrenome;
    
		}
  
		
		
		function getSobrenome(){
			return $this->sobrenome;
    
		}
  
  
  
		function setConta($conta){
			$this->conta=$conta;
    
		}
  
  
  
		function getConta(){
			return  $this->conta;
    
		}

    
    
    
    		function setPassword($password){
			$this->conta=$conta;
    
		}
  
  
  
		function getPassword(){
			return  $this->password;
    
		}




		function setEmail($email){
			$this->email=$email;
    
		}
  
  
  
		function getEmail(){
			return  $this->email;
    
		}
  
  
  
		function GerarValueParaBind(){
			$this->NomeAttr="";
			$virg=",";
			$doisp=":";
   
				for($i=0;$i<count($this->NomeDosAttr);$i++)
					if($i==count($this->NomeDosAttr)-1 && $this->NomeDosAttr[$i]=="password")
            $this->NomeAttr.="md5(".$doisp.$this->NomeDosAttr[$i].")";
      
          elseif($this->NomeDosAttr[$i]=="password")
            $this->NomeAttr.="md5(".$doisp.$this->NomeDosAttr[$i].")".$virg;
          
          elseif($i==count($this->NomeDosAttr)-1)
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

  
	}
