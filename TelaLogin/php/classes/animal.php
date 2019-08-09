<?php
	class animal{
	
	public $nome;
	public $raca;
	public $idade;
	public $NomeDosAttr=["nome","sobrenome","conta"];  
	public $NomeBotaoSubmit=["Cadastrar","Consultar","Deletar","Atualizar"];

	public function __construct($nome=null,$raca=null,$idade=null)
	{
		$this->nome=$nome;
		$this->raca=$raca;
		$this->idade=$idade;

	}




	public function setNome($value)
	{
		$this->nome=$value;
	}



	public function getNome()
	{
		return $this->nome;
	}

	



	public function setRaca($value)
	{
		$this->raca=$value;
	}



	public function getRaca()
	{
		return $this->raca;
	}





	public function setIdade($value)
	{
		$this->idade=$value;
	}



	public function getIdade()
	{
		return $this->idade;
	}


}