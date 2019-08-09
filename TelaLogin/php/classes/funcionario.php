<?php 
 /**
  * 
  */
 class funcionario
 {
 	public $nome;
 	public $endereco;
 	public $tel;
 	public $email;
 	public $idade;
 	public $profissao;



 	function __construct($nome=null,$endereco=null,$tel=null,$email=null,$idade=null,$profissao=null)
 	{
		$this->nome=$nome;
		$this->endereco=$endereco;
		$this->tel=$tel;
		$this->email=$email;
		$this->idade=$idade;
		$this->profissao=$profissao;
 	}



	public function setNome($value)
	{
		$this->nome=$value;
	}




	public function getNome()
	{
		return $this->email;
	}
	
	
	
	
	
	public function setEndereco($value)
	{
		$this->endereco=$value;
	}
	
	
	
	public function getEndereco()
	{
		return $this->endereco;
	}
	
	
	
	
	
	public function setTel($value)
	{
		$this->tel=$value;
	}
	
	
	
	
	public function getTel()
	{
		return $this->tel;
	}
	
	
	
	
	
	public function setEmail($value)
	{
		$this->email=$value;
	}
	
	
	
	public function getEmail()
	{
	return $this->email;
	}





	public function setIdade($value)
	{
		$this->idade=$value;
	}
	
	
	
	public function getIdade()
	{
		return $this->idade;
	}
	
	
	
	
	
	public function setProfissao($value)
	{
		$this-Profissao=$value;
	}
	
	
	
	public function getProfissao($value='')
	{
		return $this-Profissao;
	}
}	