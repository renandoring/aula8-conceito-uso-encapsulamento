<?php 
	class Funcionario{
		private $codigo;
		private $nome;
		protected $salario;

		//Metodos acessores GET and SET	
		function getCodigo(){
			return $this->codigo;
		}
		//set Codigo
		function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		//Get nome
		function getNome(){
			return $this->nome;
		}
		//Set nome
		function setNome($nome){
			$this->nome = $nome;
		}
		//get Salario
		function getSalario(){
			return $this->salario;
		}
		//set Salario
		function setSalario($salario){
			$this->salario = $salario;
		}
	}
?>