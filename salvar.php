<?php
require "lib/class.Pessoa.php";

try {
    $p = new Pessoa();
    $p->setNome($_POST['nome']);
    $p->setSobrenome($_POST['sobrenome']);
    $p->setDtNasc($_POST['dtnasc']);
    $p->inserir();
    print $p;
}catch(Exception $e){
    print json_encode([
        "error" => true,
        "message" => $e->getMessage()
    ]);
}

?>