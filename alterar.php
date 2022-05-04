<?php
require "lib/class.Pessoa.php";

$id = $_GET['id'];

$p = Pessoa::findByPk($id);
if (!$p) throw new Exception("Usuário não encontrado!");
$p->setNome($_POST['nome']);
$p->setSobrenome($_POST['sobrenome']);
$p->setDtNasc($_POST['dtnasc']);
$p->alterar();
print $p;

?>