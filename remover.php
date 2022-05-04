<?php
require "lib/class.Pessoa.php";

$id = $_GET['id'];

$p = Pessoa::findByPk($id);
if (!$p) throw new Exception("Usuário não encontrado!");
$p->remover();
print $p;

?>