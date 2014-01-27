<?php 
//Encapsular proteger codigo fonte
include_once "Funcionario.class.php";
include_once "Estagiario.class.php";

$renan = new Funcionario();
$renan->setCodigo(123456);
$renan->setNome("Renan");
$renan->setSalario(600.00);

$juliana = new Estagiario();
$juliana->setCodigo(654321);
$juliana->setNome("Juliana");
$juliana->setSalario(600.00);
echo $juliana->getSalario()."\n";
?>