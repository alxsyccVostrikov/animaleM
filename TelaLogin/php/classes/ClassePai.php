<?php 
	class ClassePai{

	public $nome;
	public $sobrenome;
	public $conta;
	public $email
	public $NomeDosAttr=["nome","sobrenome","conta","email"];  
	public $NomeBotaoSubmit=["Cadastrar","Consultar","Deletar","Atualizar"];
 


function __construct($nome=null,$sobrenome=null,$conta=null,$email=null){
			$this->nome=$nome;
			$this->sobrenome=$sobrenome;
			$this->conta=$conta;
			$this->email=$email
		}
  
  
  
		function setNome($nome){
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




		function setEmail($email){
			$this->email=$email;
    
		}
  
  
  
		function getConta(){
			return  $this->email;
    
		}
  
  
  
		
}
