<?php 
class Estagiario extends Funcionario{
	//Sobrescrevendo metodo
	function getSalario(){
		return $this->salario * 1.12;
	}
}
?>